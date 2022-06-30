<?php

namespace App\Http\Controllers;

use App\Models\xxcust_fc_cp_autotransporte;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\xxcust_fc_cp_ubicacion;
use App\Models\xxcust_fc_cp_comprobante;
use App\Models\xxcust_fc_cp_mercancias;
use App\Models\xxcust_fc_cp_tipofigura;
use Yajra\DataTables\DataTables;

class ProcesoCPController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($envio_num)
    {
        $vistaDB = DB::table('EBS_CP_TRANSF_V')
            ->where('envio_num', $envio_num)
            ->get();

        $vistaDB2 = DB::table('EBS_CP_TRANSF_LINES_V')
            ->where('envio_num', $envio_num)
            ->get();
        return view('Cuerpo.ProcesoCP', ['vistaDB' => $vistaDB, 'vistaDB2' => $vistaDB2]);
    }

    public function indexconsultadescarga()
    {
        return view('Cuerpo.ConsultaYDescarga');
    }

    /**
     * Store a newly created resource in union.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function union($envio_num)
    {
        try {
            //Busca el registro solicitado segun su $envio_num
            $ebs_cp_transf_v = DB::table('EBS_CP_TRANSF_V')->where('envio_num', $envio_num)->get();
            $ebs_cp_transf_lines = DB::table('EBS_CP_TRANSF_LINES_V')->where('envio_num', $envio_num)->get();

            //Devuelve respuesta con los registros solicitados segun su $envio_num
            return response()->json(['status' => 'OK', 'data' => ['type' => 'EBS_CP_TRANSF_V', 'attributes' => $ebs_cp_transf_v, 'type2' => 'EBS_CP_TRANSF_LINES_V', 'attributes2' => $ebs_cp_transf_lines]], 200);
        } catch (\Exception $ex) {
            return response()->json(['errors' => array(['status' => 500, 'code_desc' => 'Internal Server Error', 'title' => 'Ocurrió un error al procesar la petición.', 'detail' => $ex->getMessage()])], 500);
        }
    }

    public function listar()
    {
        try {
            //Busca el registro solicitado segun su $envio_num
            $proceso_cp = xxcust_fc_cp_ubicacion::with('comprobante', 'mercancia', 'autotransporte', 'tipofigura')->get();

            //Devuelve respuesta con los registros solicitados
            return DataTables::of($proceso_cp)->toJson(true);
        } catch (\Exception $ex) {
            return response()->json(['errors' => array(['status' => 500, 'code_desc' => 'Internal Server Error', 'title' => 'Ocurrió un error al procesar la petición.', 'detail' => $ex->getMessage()])], 500);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {

            //Valida si se estan recibiendo los campos obligatorios
            $valid_CP = $this->validateDatosCP($request);

            //Si no se cumple alguna validacion envia mensaje
            if ($valid_CP->fails()) {
                $errors = array();

                //Recorre todos los errores encontrados para devolverlos en la respuesta
                foreach ($valid_CP->errors()->all() as $err_msg) {
                    $errors[] = ['error_desc' => $err_msg];
                }

                //Envia respuesta de error
                return response()->json(['errors' => array(['status' => 400, 'code_desc' => 'Unprocessable Entity', 'title' => 'Campos requeridos no cumplen las condiciones de registro.', 'detail' => $errors])], 400);
            }

            //Crea el registro
            $ubicacion = xxcust_fc_cp_ubicacion::create([
                'tipo_origen_ubicacion' => $request->input('ubicacion.tipo_origen_ubicacion'),
                'id_origen_ubicacion' => $request->input('ubicacion.id_origen_ubicacion'),
                'rfc_origen_ubicacion' => $request->input('ubicacion.rfc_origen_ubicacion'),
                'nomb_remit_origen_ubicacion' => $request->input('ubicacion.nomb_remit_origen_ubicacion'),
                'fecha_origen_ubicacion' => Carbon::parse($request->input('ubicacion.fecha_origen_ubicacion'))->format('Y-m-d H:i:s'), 
                'tipo_destino_ubicacion' => $request->input('ubicacion.tipo_destino_ubicacion'),
                'id_destino_ubicacion' => $request->input('ubicacion.id_destino_ubicacion'),
                'rfc_destino_ubicacion' => $request->input('ubicacion.rfc_destino_ubicacion'),
                'nomb_remit_destino_ubicacion' => $request->input('ubicacion.nomb_remit_destino_ubicacion'),
                'fecha_destino_ubicacion' => Carbon::parse($request->input('ubicacion.fecha_destino_ubicacion'))->format('Y-m-d H:i:s'),
                'dist_recorr_destino_ubicacion' => $request->input('ubicacion.dist_recorr_destino_ubicacion'),
                'calle_origen_domicilio' => $request->input('ubicacion.calle_origen_domicilio'),
                'numero_ext_origen_domicilio' => $request->input('ubicacion.numero_ext_origen_domicilio'),
                'numero_int_origen_domicilio' => $request->input('ubicacion.numero_int_origen_domicilio'),
                'colonia_origen_domicilio' => $request->input('ubicacion.colonia_origen_domicilio'),
                'localidad_origen_domicilio' => $request->input('ubicacion.localidad_origen_domicilio'),
                'referencia_origen_domicilio' => $request->input('ubicacion.referencia_origen_domicilio'),
                'municipio_origen_domicilio' => $request->input('ubicacion.municipio_origen_domicilio'),
                'estado_origen_domicilio' => $request->input('ubicacion.estado_origen_domicilio'),
                'pais_origen_domicilio' => $request->input('ubicacion.pais_origen_domicilio'),
                'cp_origen_domicilio' => $request->input('ubicacion.cp_origen_domicilio'),
                'calle_destino_domicilio' => $request->input('ubicacion.calle_destino_domicilio'),
                'numero_ext_destino_domicilio' => $request->input('ubicacion.numero_ext_destino_domicilio'),
                'numero_int_destino_domicilio' => $request->input('ubicacion.numero_int_destino_domicilio'),
                'colonia_destino_domicilio' => $request->input('ubicacion.colonia_destino_domicilio'),
                'localidad_destino_domicilio' => $request->input('ubicacion.localidad_destino_domicilio'),
                'referencia_destino_domicilio' => $request->input('ubicacion.referencia_destino_domicilio'),
                'municipio_destino_domicilio' => $request->input('ubicacion.municipio_destino_domicilio'),
                'estado_destino_domicilio' => $request->input('ubicacion.estado_destino_domicilio'),
                'pais_destino_domicilio' => $request->input('ubicacion.pais_destino_domicilio'),
                'cp_destino_domicilio' => $request->input('ubicacion.cp_destino_domicilio')
            ]);

            $arrComprobantes = $request->input('comprobante.*');

            foreach ($arrComprobantes as $comp ) {
                
                //Crea el registro
                $comprobante = xxcust_fc_cp_comprobante::create([
                    'id_seccion_ubicacion' => $ubicacion->id_seccion_ubicacion,
                    'envio_id' => $comp['envio_id'],
                    'envio_num' => $comp['envio_num'],
                    'version_comprobante' => $comp['version_comprobante'],
                    'fecha_comprobante' => Carbon::parse($comp['fecha_comprobante'])->format('Y-m-d H:i:s'),
                    'tipo_comprobante' => $comp['tipo_comprobante'],
                    'subtotal_comprobante' => $comp['subtotal_comprobante'],
                    'moneda_comprobante' => $comp['moneda_comprobante'],
                    'total_comprobante' => $comp['total_comprobante'],
                    'rfc_receptor' => $comp['rfc_receptor'],
                    'usocfdi_receptor' => $comp['usocfdi_receptor'],
                    'clave_producto_concepto' => $comp['clave_producto_concepto'],
                    'clave_unidad_concepto' => $comp['clave_unidad_concepto'],
                    'descripcion_concepto' => $comp['descripcion_concepto'],
                    'version_carta_porte' => $comp['version_carta_porte'],
                    'transpInternac_carta_porte' => $comp['transpInternac_carta_porte'],
                    'totaldistrec_carta_porte' => $comp['totaldistrec_carta_porte']
                ]);

            }

            $arrMercancia = $request->input('mercancia.*');

            foreach ($arrMercancia as $comp ) {
                
                //Crea el registro
                $mercancia = xxcust_fc_cp_mercancias::create([
                    'id_seccion_ubicacion' => $ubicacion->id_seccion_ubicacion,
                    'envio_id' => $comp['envio_id'],
                    'partida_id' => $comp['partida_id'],  
                    'peso_bruto_total_mercancia' => $comp['peso_bruto_total_mercancia'],
                    'unidad_peso_mercancia' => $comp['unidad_peso_mercancia'],
                    'num_total_mercancia' => $comp['num_total_mercancia'],
                    'bienes_transp_mercancia' => $comp['bienes_transp_mercancia'],
                    'descripción_mercancia' => $comp['descripción_mercancia'],
                    'cantidad_mercancia' => $comp['cantidad_mercancia'],
                    'clave_unidad_mercancia' => $comp['clave_unidad_mercancia'],
                    'unidad_mercancia' => $comp['unidad_mercancia'],
                    'dimensiones_mercancia' => $comp['dimensiones_mercancia'],
                    'material_peligroso_mercancia' => $comp['material_peligroso_mercancia'],
                    'peso_kg_mercancia' => $comp['peso_kg_mercancia'],
                    'valor_mercancia' => $comp['valor_mercancia'],
                    'moneda_mercancia' => $comp['moneda_mercancia'],
                    'cantidad_transporta' => $comp['cantidad_transporta'],
                    'id_origen_transporta' => $comp['id_origen_transporta'],
                    'id_destino_transporta' => $comp['id_destino_transporta']
                ]);

            }
                
                //Crea el registro
                $autotransporte = xxcust_fc_cp_autotransporte::create([
                    'id_seccion_ubicacion' => $ubicacion->id_seccion_ubicacion,
                    'perm_sct_at' => $request->input('autotransporte.perm_sct_at'), 
                    'num_permiso_sct_at' =>  $request->input('autotransporte.num_permiso_sct_at'),  
                    'config_vehicular_at' =>  $request->input('autotransporte.config_vehicular_at'),
                    'placa_vm_at' =>  $request->input('autotransporte.placa_vm_at'),
                    'ano_modelo_vm_at' =>  $request->input('autotransporte.ano_modelo_vm_at'),
                    'nombre_aseg_resp_at' =>  $request->input('autotransporte.nombre_aseg_resp_at'),
                    'poliza_resp_at' =>  $request->input('autotransporte.poliza_resp_at'),
                    'nombre_aseg_carga_at' =>  $request->input('autotransporte.nombre_aseg_carga_at'),
                    'poliza_carga_at' =>  $request->input('autotransporte.poliza_carga_at'),
                    'subtipo_remolque_at' =>  $request->input('autotransporte.subtipo_remolque_at'),
                    'placa_remolque_at' =>  $request->input('autotransporte.placa_remolque_at'),
                ]);

                 //Crea el registro
                 $tipofigura = xxcust_fc_cp_tipofigura::create([
                    'id_seccion_ubicacion' => $ubicacion->id_seccion_ubicacion,
                    'tipofigura_tpf' => $request->input('tipofigura.tipofigura_tpf'), 
                    'rfc_tpf' => $request->input('tipofigura.rfc_tpf'), 
                    'num_licencia_tpf' => $request->input('tipofigura.num_licencia_tpf'), 
                    'nombre_operador_tpf' => $request->input('tipofigura.nombre_operador_tpf'), 
                    'residencia_fiscal_tpf' => $request->input('tipofigura.residencia_fiscal_tpf'), 
                 ]);

        

            // //Devuelve una respuesta confirmando que los datos se guardaron correctamente
            return response()->json(['status' => 'OK', 'data' => ['ubicacion' => $ubicacion, 'comprobante' => $comprobante, 'mercancia' => $mercancia, 'autotransporte' => $autotransporte, 'tipofigura' => $tipofigura]]);
        } catch (\Exception $ex) {
            return response()->json(['errors' => array(['status' => 500, 'code_desc' => 'Internal Server Error', 'title' => 'Ocurrió un error al procesar la petición.', 'detail' => $ex->getMessage()])], 500);
        }
    }

    private function validateDatosCP(Request $request)
    {
        $valid_CP = Validator::make($request->all(), [
            //Valida datos Ubicación
            'ubicacion.tipo_origen_ubicacion' => 'required|max:10',
            'ubicacion.id_origen_ubicacion' => 'required|max:8',
            'ubicacion.rfc_origen_ubicacion' => 'required|max:13',
            'ubicacion.nomb_remit_origen_ubicacion' => 'required|max:50',
            'ubicacion.fecha_origen_ubicacion' => 'required|date',
            'ubicacion.tipo_destino_ubicacion' => 'required|max:10',
            'ubicacion.id_destino_ubicacion' => 'required|max:8',
            'ubicacion.rfc_destino_ubicacion' => 'required|max:13',
            'ubicacion.nomb_remit_destino_ubicacion' => 'required|max:50',
            'ubicacion.fecha_destino_ubicacion' => 'required|date',
            'ubicacion.dist_recorr_destino_ubicacion' => 'required',
            'ubicacion.calle_origen_domicilio' => 'required|max:340',
            'ubicacion.numero_ext_origen_domicilio' => 'required',
            'ubicacion.numero_int_origen_domicilio' => 'nullable',
            'ubicacion.colonia_origen_domicilio' => 'required|max:4',
            'ubicacion.localidad_origen_domicilio' => 'required|max:2',
            'ubicacion.referencia_origen_domicilio' => 'nullable|max:150',
            'ubicacion.municipio_origen_domicilio' => 'required|max:3',
            'ubicacion.estado_origen_domicilio' => 'required|max:3',
            'ubicacion.pais_origen_domicilio' => 'required|max:3',
            'ubicacion.cp_origen_domicilio' => 'required|digits:5',
            'ubicacion.calle_destino_domicilio' => 'required|max:340',
            'ubicacion.numero_ext_destino_domicilio' => 'required',
            'ubicacion.numero_int_destino_domicilio' => 'nullable',
            'ubicacion.colonia_destino_domicilio' => 'required|max:4',
            'ubicacion.localidad_destino_domicilio' => 'required|max:2',
            'ubicacion.referencia_destino_domicilio' => 'nullable|max:150',
            'ubicacion.municipio_destino_domicilio' => 'required|max:3',
            'ubicacion.estado_destino_domicilio' => 'required|max:3',
            'ubicacion.pais_destino_domicilio' => 'required|max:3',
            'ubicacion.cp_destino_domicilio'  => 'required|digits:5',

            //Valida datos Comprobante
            'comprobante.*.envio_id' => 'required|integer',
            'comprobante.*.envio_num' => 'nullable',
            'comprobante.*.version_comprobante' => 'required|max:5',
            'comprobante.*.fecha_comprobante' => 'required|date',
            'comprobante.*.tipo_comprobante' => 'required|max:1',
            'comprobante.*.subtotal_comprobante' => 'required|max:2',
            'comprobante.*.moneda_comprobante' => 'required|max:5',
            'comprobante.*.total_comprobante' => 'required|max:2',
            'comprobante.*.rfc_receptor' => 'required|alpha_num|max:13',
            'comprobante.*.usocfdi_receptor' => 'required|size:3',
            'comprobante.*.clave_producto_concepto' => 'nullable',
            'comprobante.*.clave_unidad_concepto' => 'required|max:3',
            'comprobante.*.descripcion_concepto' => 'required',
            'comprobante.*.version_carta_porte' => 'required|max:4',
            'comprobante.*.transpInternac_carta_porte' => 'required|max:2',
            'comprobante.*.totaldistrec_carta_porte' => 'required',

            //Valida datos Mercancia
            'mercancia.*.envio_id' => 'required|integer',
            'mercancia.*.partida_id' => 'nullable|integer',
            'mercancia.*.peso_bruto_total_mercancia' => 'required',
            'mercancia.*.unidad_peso_mercancia' => 'required',
            'mercancia.*.num_total_mercancia' => 'required|integer',
            'mercancia.*.bienes_transp_mercancia' => 'required',
            'mercancia.*.descripción_mercancia' => 'required|max:250',
            'mercancia.*.cantidad_mercancia' => 'required',
            'mercancia.*.clave_unidad_mercancia' => 'required|max:10',
            'mercancia.*.unidad_mercancia' => 'required',
            'mercancia.*.dimensiones_mercancia' => 'required|max:80',
            'mercancia.*.material_peligroso_mercancia' => 'required|max:2',
            'mercancia.*.peso_kg_mercancia' => 'required',
            'mercancia.*.valor_mercancia' => 'required',
            'mercancia.*.moneda_mercancia' => 'required|max:3',
            'mercancia.*.cantidad_transporta' => 'required',
            'mercancia.*.id_origen_transporta' => 'required|max:8',
            'mercancia.*.id_destino_transporta' => 'required|max:8',

            //Valida datos Autotransporte
            'autotransporte.perm_sct_at' => 'required|max:120',
            'autotransporte.num_permiso_sct_at' => 'required',
            'autotransporte.config_vehicular_at' => 'required|max:250',
            'autotransporte.placa_vm_at' => 'required',
            'autotransporte.ano_modelo_vm_at' => 'required|max:4',
            'autotransporte.nombre_aseg_resp_at' => 'required',
            'autotransporte.poliza_resp_at' => 'required',
            'autotransporte.nombre_aseg_carga_at' => 'required',
            'autotransporte.poliza_carga_at' => 'required',
            'autotransporte.subtipo_remolque_at' => 'nullable',
            'autotransporte.placa_remolque_at' => 'nullable',

            //Valida datos Tipofigura
            'tipofigura.tipofigura_tpf' => 'required|max:2',
            'tipofigura.rfc_tpf' => 'required|max:13',
            'tipofigura.num_licencia_tpf' => 'required',
            'tipofigura.nombre_operador_tpf' => 'required',
            'tipofigura.residencia_fiscal_tpf' => 'required',
        ]);

        return $valid_CP;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
