<?php

namespace App\Http\Controllers;

use App\Models\xxcust_fc_cp_gestion_autotransporte;
use App\Models\xxcust_fc_cp_placas;
use App\Models\xxcust_fc_cp_poliza_carga;
use App\Models\xxcust_fc_cp_poliza_civil;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;


class ModuloAutotransporteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Cuerpo.ModuloAutoTransporte');
    }

    public function listar()
    {
        try {
            //Busca el registro 
            $gestion_autotransporte = xxcust_fc_cp_gestion_autotransporte::with('placa', 'polizaCarga', 'polizaCivil')->get();
            
            //Devuelve respuesta con los registros solicitados
            // return response()->json(['status' => 'OK', 'data' => ['type' => 'Gestion Autotransporte', 'attributes' => $gestion_autotransporte]], 200);
            return Datatables::of($gestion_autotransporte)->toJson(true);
        } catch (\Exception $ex) {
            return response()->json(['errors' => array(['status' => 500, 'code_desc' => 'Internal Server Error', 'title' => 'Ocurrió un error al procesar la petición.', 'detail' => $ex->getMessage()])], 500);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            $valid_domicilio = $this->validateDatos($request);

            //Si no se cumple alguna validacion envia mensaje
            if ($valid_domicilio->fails()) {
                $errors = array();

                //Recorre todos los errores encontrados para devolverlos en la respuesta
                foreach ($valid_domicilio->errors()->all() as $err_msg) {
                    $errors[] = ['error_desc' => $err_msg];
                }

                //Envia respuesta de error
                return response()->json(['errors' => array(['status' => 400, 'code_desc' => 'Unprocessable Entity', 'title' => 'Campos requeridos no cumplen las condiciones de registro.', 'detail' => $errors])], 400);
            }

             //Crea el registro
             $gestion_autotransporte = xxcust_fc_cp_gestion_autotransporte::create([
                'clave_vehiculo' => $request->input('gestion_autotransporte.clave_vehiculo'),
                'permiso_sct' => $request->input('gestion_autotransporte.permiso_sct'),
                'numero_permiso_sct' => $request->input('gestion_autotransporte.numero_permiso_sct'),
                'clave_configuracion_vehicular' => $request->input('gestion_autotransporte.clave_configuracion_vehicular'),
                'ano_modelo' => $request->input('gestion_autotransporte.ano_modelo'),
            ]);

            $placas = xxcust_fc_cp_placas::create([
                'clave_vehiculo' => $gestion_autotransporte->clave_vehiculo,
                'placa' => $request->input('placas.placa')
            ]);

            $poliza_civil = xxcust_fc_cp_poliza_civil::create([
                'clave_vehiculo' => $gestion_autotransporte->clave_vehiculo,
                'nombre_aseguradora_civil' => $request->input('poliza_civil.nombre_aseguradora_civil'),
                'numero_poliza_civil' => $request->input('poliza_civil.numero_poliza_civil')
            ]);

            $poliza_carga = xxcust_fc_cp_poliza_carga::create([
                'clave_vehiculo' => $gestion_autotransporte->clave_vehiculo,
                'nombre_aseguradora_carga' => $request->input('poliza_carga.nombre_aseguradora_carga'),
                'numero_poliza_carga' => $request->input('poliza_carga.numero_poliza_carga')
            ]);

              //Devuelve una respuesta confirmando que los datos se guardaron correctamente
              return response()->json(['status' => 'OK', 'data' => ['Gestion Autotransporte' => $gestion_autotransporte, 'Placas' => $placas, 'Poliza Civil' => $poliza_civil, 'Poliza Carga' => $poliza_carga]], 201);
            } catch (\Exception $ex) {
                return response()->json(['errors' => array(['status' => 500, 'code_desc' => 'Internal Server Error', 'title' => 'Ocurrió un error al procesar la petición.', 'detail' => $ex->getMessage()])], 500);
            }
    }

    private function validateDatos(Request $request)
    {
        $valid_autotransporte = Validator::make($request->all(), [
            //Valida datos Gestión Autotransporte
            'gestion_autotransporte.clave_vehiculo' => 'nullable|string',
            'gestion_autotransporte.permiso_sct' => 'required|max:120',
            'gestion_autotransporte.numero_permiso_sct' => 'required',
            'gestion_autotransporte.clave_configuracion_vehicular' => 'required|max:250',
            'gestion_autotransporte.ano_modelo' => 'required|digits:4',
            
            //Valida datos Gestión Autotransporte-Placa
            'placas.placa' => 'required',

            // //Valida datos Gestión Autotransporte-Póliza Civil
            'poliza_civil.nombre_aseguradora_civil' => 'required',
            'poliza_civil.numero_poliza_civil' => 'required',

            // //Valida datos Gestión Autotransporte-Póliza Carga
            'poliza_carga.nombre_aseguradora_carga' => 'required',
            'poliza_carga.numero_poliza_carga' => 'required'
            
        ]);

        return $valid_autotransporte;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            //Busca el registro solicitado
            $gestion_autotransporte = xxcust_fc_cp_gestion_autotransporte::join('xxcust_fc_cp_placas', 'xxcust_fc_cpgestion_autotran.clave_vehiculo', '=', 'xxcust_fc_cp_placas.clave_vehiculo')
            ->where(xxcust_fc_cp_placas::raw('xxcust_fc_cp_placas.placa'), 'LIKE',  $id )
            ->with('polizaCarga', 'polizaCivil')
            ->get();

            //Devuelve respuesta con el registro solicitado
            return response()->json(['status' => 'OK', 'data' => ['type' => 'Gestion Autotransporte', 'attributes' => $gestion_autotransporte]], 200);
        } catch (\Exception $ex) {
            return response()->json(['errors' => array(['status' => 500, 'code_desc' => 'Internal Server Error', 'title' => 'Ocurrió un error al procesar la petición.', 'detail' => $ex->getMessage()])], 500);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            //Busca el registro solicitado
            $gestion_autotransporte = xxcust_fc_cp_gestion_autotransporte::where('clave_vehiculo', $id)->with('placa', 'polizaCarga', 'polizaCivil')->get();

            //Devuelve respuesta con el registro solicitado
            return response()->json(['status' => 'OK', 'data' => ['type' => 'Gestion Autotransporte', 'attributes' => $gestion_autotransporte]], 200);
        } catch (\Exception $ex) {
            return response()->json(['errors' => array(['status' => 500, 'code_desc' => 'Internal Server Error', 'title' => 'Ocurrió un error al procesar la petición.', 'detail' => $ex->getMessage()])], 500);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $clave_vehiculo)
    {
        try {

            //Obtenemos el registro de la base de datos
            $gestion_autotransporte = xxcust_fc_cp_gestion_autotransporte::find($clave_vehiculo);

             //Si no encuentra el registro envia mensaje
           if (!$gestion_autotransporte) {
               return response()->json(['errors' => array(['status' => 404, 'code_desc' => 'Not Found', 'title' => 'No se encontró el registro.', 'detail' => 'No existe el registro solicitado.'])], 404);
           }

            //Valida si se estan recibiendo los campos obligatorios
            $valid_autotransporte = Validator::make($request->all(), [
            'gestion_autotransporte.clave_vehiculo' => 'nullable|string',
            'gestion_autotransporte.permiso_sct' => 'required|max:120',
            'gestion_autotransporte.numero_permiso_sct' => 'required',
            'gestion_autotransporte.clave_configuracion_vehicular' => 'required|max:250',
            'gestion_autotransporte.ano_modelo' => 'required|digits:4'
               
            ]);


            //Si no se cumple alguna validacion envia mensaje
            if ($valid_autotransporte->fails()) {
                $errors = array();

                //Recorre todos los errores encontrados para devolverlos en la respuesta
                foreach ($valid_autotransporte->errors()->all() as $err_msg) {
                    $errors[] = ['error_desc' => $err_msg];
                }

                //Envia respuesta de error
                return response()->json(['errors' => array(['status' => 400, 'code_desc' => 'Unprocessable Entity', 'title' => 'Campos requeridos no cumplen las condiciones de registro.', 'detail' => $errors])], 400);
            }

            //Asigna los nuevos valores
            $gestion_autotransporte->clave_vehiculo = $request->input('gestion_autotransporte.clave_vehiculo');
            $gestion_autotransporte->permiso_sct = $request->input('gestion_autotransporte.permiso_sct');
            $gestion_autotransporte->numero_permiso_sct = $request->input('gestion_autotransporte.numero_permiso_sct');
            $gestion_autotransporte->clave_configuracion_vehicular = $request->input('gestion_autotransporte.clave_configuracion_vehicular');
            $gestion_autotransporte->ano_modelo = $request->input('gestion_autotransporte.ano_modelo');
            
            //Actualiza el registro
            $gestion_autotransporte->update();

        //Devuelve una respuesta confirmando que los datos se guardaron correctamente
        return response()->json(['status' => 'OK', 'data' => ['type' => 'gestion_autotransporte', 'attributes' => $gestion_autotransporte]], 200);

            } catch (\Exception $ex) {
                return response()->json(['errors' => array(['status' => 500, 'code_desc' => 'Internal Server Error', 'title' => 'Ocurrió un error al procesar la petición.', 'detail' => $ex->getMessage()])], 500);
            }
            
    }

    public function updateplaca(Request $request, $clave_vehiculo)
    {
        try {

            //Obtenemos el registro de la base de datos
            $placas = xxcust_fc_cp_placas::where('clave_vehiculo', $clave_vehiculo)->first();

             //Si no encuentra el registro envia mensaje
           if (!$placas) {
               return response()->json(['errors' => array(['status' => 404, 'code_desc' => 'Not Found', 'title' => 'No se encontró el registro.', 'detail' => 'No existe el registro solicitado.'])], 404);
           }

            //Valida si se estan recibiendo los campos obligatorios
            $valid_placas = Validator::make($request->all(), [
                'placas.placa' => 'required',
            ]);


            //Si no se cumple alguna validacion envia mensaje
            if ($valid_placas->fails()) {
                $errors = array();

                //Recorre todos los errores encontrados para devolverlos en la respuesta
                foreach ($valid_placas->errors()->all() as $err_msg) {
                    $errors[] = ['error_desc' => $err_msg];
                }

                //Envia respuesta de error
                return response()->json(['errors' => array(['status' => 400, 'code_desc' => 'Unprocessable Entity', 'title' => 'Campos requeridos no cumplen las condiciones de registro.', 'detail' => $errors])], 400);
            }

            //Asigna los nuevos valores

            $placas->clave_vehiculo = $request->input('placas.clave_vehiculo');
            $placas->placa = $request->input('placas.placa');
           

            //Actualiza el registro
            $placas->update();

        //Devuelve una respuesta confirmando que los datos se guardaron correctamente
        return response()->json(['status' => 'OK', 'data' => ['type' => 'placas', 'attributes' => $placas]], 200);

            } catch (\Exception $ex) {
                return response()->json(['errors' => array(['status' => 500, 'code_desc' => 'Internal Server Error', 'title' => 'Ocurrió un error al procesar la petición.', 'detail' => $ex->getMessage()])], 500);
            }
            
    }

    public function updatepolizacivil(Request $request, $clave_vehiculo)
    {
        try {

            //Obtenemos el registro de la base de datos
            $poliza_civil = xxcust_fc_cp_poliza_civil::where('clave_vehiculo', $clave_vehiculo)->first();
           

             //Si no encuentra el registro envia mensaje
           if (!$poliza_civil) {
               return response()->json(['errors' => array(['status' => 404, 'code_desc' => 'Not Found', 'title' => 'No se encontró el registro.', 'detail' => 'No existe el registro solicitado.'])], 404);
           }

            //Valida si se estan recibiendo los campos obligatorios
            $valid_poliza_civil = Validator::make($request->all(), [
            'poliza_civil.nombre_aseguradora_civil' => 'required',
            'poliza_civil.numero_poliza_civil' => 'required'

            ]);


            //Si no se cumple alguna validacion envia mensaje
            if ($valid_poliza_civil->fails()) {
                $errors = array();

                //Recorre todos los errores encontrados para devolverlos en la respuesta
                foreach ($valid_poliza_civil->errors()->all() as $err_msg) {
                    $errors[] = ['error_desc' => $err_msg];
                }

                //Envia respuesta de error
                return response()->json(['errors' => array(['status' => 400, 'code_desc' => 'Unprocessable Entity', 'title' => 'Campos requeridos no cumplen las condiciones de registro.', 'detail' => $errors])], 400);
            }

            //Asigna los nuevos valores

            $poliza_civil->clave_vehiculo = $request->input('poliza_civil.clave_vehiculo');
            $poliza_civil->nombre_aseguradora_civil = $request->input('poliza_civil.nombre_aseguradora_civil');
            $poliza_civil->numero_poliza_civil = $request->input('poliza_civil.numero_poliza_civil');
           

            //Actualiza el registro
            $poliza_civil->update();

        //Devuelve una respuesta confirmando que los datos se guardaron correctamente
        return response()->json(['status' => 'OK', 'data' => ['type' => 'poliza_civil', 'attributes' => $poliza_civil]], 200);

            } catch (\Exception $ex) {
                return response()->json(['errors' => array(['status' => 500, 'code_desc' => 'Internal Server Error', 'title' => 'Ocurrió un error al procesar la petición.', 'detail' => $ex->getMessage()])], 500);
            }
            
    }

    public function updatepolizacarga(Request $request, $clave_vehiculo)
    {
        try {

            //Obtenemos el registro de la base de datos
            $poliza_carga = xxcust_fc_cp_poliza_carga::where('clave_vehiculo', $clave_vehiculo)->first();
           

             //Si no encuentra el registro envia mensaje
           if (!$poliza_carga) {
               return response()->json(['errors' => array(['status' => 404, 'code_desc' => 'Not Found', 'title' => 'No se encontró el registro.', 'detail' => 'No existe el registro solicitado.'])], 404);
           }

            //Valida si se estan recibiendo los campos obligatorios
            $valid_poliza_carga = Validator::make($request->all(), [
            'poliza_carga.nombre_aseguradora_carga' => 'required',
            'poliza_carga.numero_poliza_carga' => 'required'
            ]);


            //Si no se cumple alguna validacion envia mensaje
            if ($valid_poliza_carga->fails()) {
                $errors = array();

                //Recorre todos los errores encontrados para devolverlos en la respuesta
                foreach ($valid_poliza_carga->errors()->all() as $err_msg) {
                    $errors[] = ['error_desc' => $err_msg];
                }

                //Envia respuesta de error
                return response()->json(['errors' => array(['status' => 400, 'code_desc' => 'Unprocessable Entity', 'title' => 'Campos requeridos no cumplen las condiciones de registro.', 'detail' => $errors])], 400);
            }

            //Asigna los nuevos valores

            $poliza_carga->clave_vehiculo = $request->input('poliza_carga.clave_vehiculo');
            $poliza_carga->nombre_aseguradora_carga = $request->input('poliza_carga.nombre_aseguradora_carga');
            $poliza_carga->numero_poliza_carga = $request->input('poliza_carga.numero_poliza_carga');
           

            //Actualiza el registro
            $poliza_carga->update();

        //Devuelve una respuesta confirmando que los datos se guardaron correctamente
        return response()->json(['status' => 'OK', 'data' => ['type' => 'poliza_carga', 'attributes' => $poliza_carga]], 200);

            } catch (\Exception $ex) {
                return response()->json(['errors' => array(['status' => 500, 'code_desc' => 'Internal Server Error', 'title' => 'Ocurrió un error al procesar la petición.', 'detail' => $ex->getMessage()])], 500);
            }
            
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            //Elimina el registro
            $gestion_autotransporte_deleted = xxcust_fc_cp_gestion_autotransporte::where('clave_vehiculo', $id)->with('placa', 'polizaCarga', 'polizaCivil')->delete();

            //Si el registro no fue eliminado envia mensaje
           if (!$gestion_autotransporte_deleted) {
               return response()->json(['errors' => array(['status' => 404, 'code_desc' => 'Not Found', 'title' => 'No se encontró el registro.', 'detail' => 'No existe ningún dato registrado.'])], 404);
            }
               //Devuelve una respuesta confirmando que el registro se elimino correctamente
           return response()->json(['status' => 'OK', 'message' => 'Se ha eliminado el registro.'], 200);
           
       } catch (\Exception $ex) {
           return response()->json(['errors' => array(['status' => 500, 'code_desc' => 'Internal Server Error', 'title' => 'Ocurrió un error al procesar la petición.', 'detail' => $ex->getMessage()])], 500);
       }
    }
}
