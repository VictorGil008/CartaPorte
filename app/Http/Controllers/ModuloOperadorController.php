<?php

namespace App\Http\Controllers;

use App\Models\xxcust_fc_cp_gestion_operador;
use App\Models\xxcust_fc_cp_licencias;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Yajra\Datatables\Datatables;
use Illuminate\Http\Request;

class ModuloOperadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Cuerpo.ModuloOperador');
    }

    public function listar()
    {
        try {
            //Busca el registro 
            $gestion_operador = xxcust_fc_cp_gestion_operador::with('licencia')->get();
            
            //Devuelve respuesta con los registros solicitados
            // return response()->json(['status' => 'OK', 'data' => ['type' => 'Gestion Operador', 'attributes' => $gestion_operador]], 200);
            return Datatables::of($gestion_operador)->toJson(true);
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
            $valid_operador = $this->validateDatos($request);

            //Si no se cumple alguna validacion envia mensaje
            if ($valid_operador->fails()) {
                $errors = array();

                //Recorre todos los errores encontrados para devolverlos en la respuesta
                foreach ($valid_operador->errors()->all() as $err_msg) {
                    $errors[] = ['error_desc' => $err_msg];
                }

                //Envia respuesta de error
                return response()->json(['errors' => array(['status' => 400, 'code_desc' => 'Unprocessable Entity', 'title' => 'Campos requeridos no cumplen las condiciones de registro.', 'detail' => $errors])], 400);
            }

             //Crea el registro
             $gestion_operador = xxcust_fc_cp_gestion_operador::create([
                'numero_operador' => $request->input('gestion_operador.numero_operador'),
                'nombre_completo_operador' => $request->input('gestion_operador.nombre_completo_operador'),
                'rfc_operador' => $request->input('gestion_operador.rfc_operador'),
               
            ]);

            $licencia = xxcust_fc_cp_licencias::create([
                'numero_operador' => $gestion_operador->numero_operador,
                'numero_licencia' => $request->input('licencia.numero_licencia'),
                'vigencia_licencia' => Carbon::parse( $request->input('licencia.vigencia_licencia'))->format('Y-m-d H:i:s'),
            ]);

              //Devuelve una respuesta confirmando que los datos se guardaron correctamente
              return response()->json(['status' => 'OK', 'data' => ['Gestion Autotransporte' => $gestion_operador, 'Licencia' => $licencia]], 201);
            } catch (\Exception $ex) {
                return response()->json(['errors' => array(['status' => 500, 'code_desc' => 'Internal Server Error', 'title' => 'Ocurrió un error al procesar la petición.', 'detail' => $ex->getMessage()])], 500);
            }
    }

    private function validateDatos(Request $request)
    {
        $valid_autotransporte = Validator::make($request->all(), [
            //Valida datos Gestión Operador
            'gestion_operador.numero_operador' => 'required|string',
            'gestion_operador.nombre_completo_operador' => 'required',
            'gestion_operador.rfc_operador' => 'required|max:13',

            // //Valida datos Gestión Operador-Licencia
            'licencia.numero_licencia' => 'required',
            'licencia.vigencia_licencia' => 'required|date'
   
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
             $gestion_operador = xxcust_fc_cp_gestion_operador::where('numero_operador', $id)->with('licencia')->get();

            //Devuelve respuesta con el registro solicitado
            return response()->json(['status' => 'OK', 'data' => ['type' => 'Gestion Operador', 'attributes' => $gestion_operador]], 200);
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $numero_operador)
    {
        try {

            //Obtenemos el registro de la base de datos
            $gestion_operador = xxcust_fc_cp_gestion_operador::find($numero_operador);

             //Si no encuentra el registro envia mensaje
           if (!$gestion_operador) {
               return response()->json(['errors' => array(['status' => 404, 'code_desc' => 'Not Found', 'title' => 'No se encontró el registro.', 'detail' => 'No existe el registro solicitado.'])], 404);
           }

            //Valida si se estan recibiendo los campos obligatorios
            $valid_operador = Validator::make($request->all(), [
            'gestion_operador.numero_operador' => 'required|string',
            'gestion_operador.nombre_completo_operador' => 'required',
            'gestion_operador.rfc_operador' => 'required|max:13'
               
            ]);


            //Si no se cumple alguna validacion envia mensaje
            if ($valid_operador->fails()) {
                $errors = array();

                //Recorre todos los errores encontrados para devolverlos en la respuesta
                foreach ($valid_operador->errors()->all() as $err_msg) {
                    $errors[] = ['error_desc' => $err_msg];
                }

                //Envia respuesta de error
                return response()->json(['errors' => array(['status' => 400, 'code_desc' => 'Unprocessable Entity', 'title' => 'Campos requeridos no cumplen las condiciones de registro.', 'detail' => $errors])], 400);
            }

            //Asigna los nuevos valores
            $gestion_operador->numero_operador = $request->input('gestion_operador.numero_operador');
            $gestion_operador->nombre_completo_operador = $request->input('gestion_operador.nombre_completo_operador');
            $gestion_operador->rfc_operador = $request->input('gestion_operador.rfc_operador');
            
            //Actualiza el registro
            $gestion_operador->update();

        //Devuelve una respuesta confirmando que los datos se guardaron correctamente
        return response()->json(['status' => 'OK', 'data' => ['type' => 'gestion_operador', 'attributes' => $gestion_operador]], 200);

            } catch (\Exception $ex) {
                return response()->json(['errors' => array(['status' => 500, 'code_desc' => 'Internal Server Error', 'title' => 'Ocurrió un error al procesar la petición.', 'detail' => $ex->getMessage()])], 500);
            }
    }

    public function updatelicencia(Request $request, $numero_operador)
    {
        try {

            //Obtenemos el registro de la base de datos
            $licencia = xxcust_fc_cp_licencias::where('numero_operador', $numero_operador)->first();

             //Si no encuentra el registro envia mensaje
           if (!$licencia) {
               return response()->json(['errors' => array(['status' => 404, 'code_desc' => 'Not Found', 'title' => 'No se encontró el registro.', 'detail' => 'No existe el registro solicitado.'])], 404);
           }

            //Valida si se estan recibiendo los campos obligatorios
            $valid_licencia = Validator::make($request->all(), [
                'licencia.numero_licencia' => 'required',
                'licencia.vigencia_licencia' => 'required|date'
            ]);


            //Si no se cumple alguna validacion envia mensaje
            if ($valid_licencia->fails()) {
                $errors = array();

                //Recorre todos los errores encontrados para devolverlos en la respuesta
                foreach ($valid_licencia->errors()->all() as $err_msg) {
                    $errors[] = ['error_desc' => $err_msg];
                }

                //Envia respuesta de error
                return response()->json(['errors' => array(['status' => 400, 'code_desc' => 'Unprocessable Entity', 'title' => 'Campos requeridos no cumplen las condiciones de registro.', 'detail' => $errors])], 400);
            }

            //Asigna los nuevos valores

            $licencia->numero_operador = $request->input('licencia.numero_operador');
            $licencia->numero_licencia = $request->input('licencia.numero_licencia');
            $licencia->vigencia_licencia = Carbon::parse( $request->input('licencia.vigencia_licencia'))->format('Y-m-d H:i:s');
           

            //Actualiza el registro
            $licencia->update();

        //Devuelve una respuesta confirmando que los datos se guardaron correctamente
        return response()->json(['status' => 'OK', 'data' => ['type' => 'licencia', 'attributes' => $licencia]], 200);

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
            $gestion_operador_deleted = xxcust_fc_cp_gestion_operador::where('numero_operador', $id)->with('licencia')->delete();

            //Si el registro no fue eliminado envia mensaje
           if (!$gestion_operador_deleted) {
               return response()->json(['errors' => array(['status' => 404, 'code_desc' => 'Not Found', 'title' => 'No se encontró el registro.', 'detail' => 'No existe ningún dato registrado.'])], 404);
            }
               //Devuelve una respuesta confirmando que el registro se elimino correctamente
           return response()->json(['status' => 'OK', 'message' => 'Se ha eliminado el registro.'], 200);
           
       } catch (\Exception $ex) {
           return response()->json(['errors' => array(['status' => 500, 'code_desc' => 'Internal Server Error', 'title' => 'Ocurrió un error al procesar la petición.', 'detail' => $ex->getMessage()])], 500);
       }
    }
}
