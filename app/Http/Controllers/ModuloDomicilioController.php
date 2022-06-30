<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\xxcust_fc_cp_gestion_domicilio;
use Yajra\Datatables\Datatables;

class ModuloDomicilioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Cuerpo.ModuloDomicilio');
    }

    public function listar()
    {
        try {
            //Busca el registro 
            $gestion_domicilio = xxcust_fc_cp_gestion_domicilio::all();
            
            //Devuelve respuesta con los registros solicitados
            // return response()->json(['status' => 'OK', 'data' => ['type' => 'Gestion Domicilio', 'attributes' => $gestion_domicilio]], 200);
            return Datatables::of($gestion_domicilio)->toJson(true);
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
             $gestion_domicilio = xxcust_fc_cp_gestion_domicilio::create([
                'id_enlace_domicilio' => $request->input('id_enlace_domicilio'),
                'tipo_domicilio' => $request->input('tipo_domicilio'),
                'nombre_domicilio' => $request->input('nombre_domicilio'),
                'calle_domicilio' => $request->input('calle_domicilio'),
                'numero_ext_domicilio' => $request->input('numero_ext_domicilio'),
                'numero_int_domicilio' => $request->input('numero_int_domicilio'),
                'referencia_domicilio' => $request->input('referencia_domicilio'),
                'cp_domicilio' => $request->input('cp_domicilio'),
                'clave_colonia_domicilio' => $request->input('clave_colonia_domicilio'),
                'clave_localidad_domicilio' => $request->input('clave_localidad_domicilio'),
                'clave_municipio_domicilio' => $request->input('clave_municipio_domicilio'),
                'clave_estado_domicilio' => $request->input('clave_estado_domicilio'),
                'clave_pais_domicilio' => $request->input('clave_pais_domicilio'),
               
            ]);

              // //Devuelve una respuesta confirmando que los datos se guardaron correctamente
              return response()->json(['status' => 'OK', 'data' => ['Gestion Domicilio' => $gestion_domicilio]], 201);
            } catch (\Exception $ex) {
                return response()->json(['errors' => array(['status' => 500, 'code_desc' => 'Internal Server Error', 'title' => 'Ocurrió un error al procesar la petición.', 'detail' => $ex->getMessage()])], 500);
            }
    }

    private function validateDatos(Request $request)
    {
        $valid_domicilio = Validator::make($request->all(), [
            //Valida datos Gestión Domicilio
            'id_enlace_domicilio' => 'numeric|required|digits:3',
            'tipo_domicilio' => 'required|max:10',
            'nombre_domicilio' => 'required|max:50',
            'calle_domicilio' => 'required|max:340',
            'numero_ext_domicilio' => 'required',
            'numero_int_domicilio' => 'nullable',
            'referencia_domicilio' => 'nullable|max:150',
            'cp_domicilio' => 'numeric|required|digits:5',
            'clave_colonia_domicilio' => 'numeric|required|digits:4',
            'clave_localidad_domicilio' => 'nullable|string|digits_between:1,2',
            'clave_municipio_domicilio' => 'numeric|required|digits:3',
            'clave_estado_domicilio' => 'alpha|required|max:3',
            'clave_pais_domicilio' => 'alpha|required|max:3'
            
        ]);

        return $valid_domicilio;
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
            $gestion_domicilio = xxcust_fc_cp_gestion_domicilio::where('id_enlace_domicilio', $id)->get();

            //Devuelve respuesta con el registro solicitado
            return response()->json(['status' => 'OK', 'data' => ['type' => 'Gestion Domicilio', 'attributes' => $gestion_domicilio]], 200);
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
            $gestion_domicilio = xxcust_fc_cp_gestion_domicilio::where('id_gestion_domicilio', $id)->get();

            //Devuelve respuesta con el registro solicitado
            return response()->json(['status' => 'OK', 'data' => ['type' => 'Gestion Domicilio', 'attributes' => $gestion_domicilio]], 200);
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
    public function update(Request $request, $id_gestion_domicilio)
    {
        try {

            //Obtenemos el registro de la base de datos
            $gestion_domicilio = xxcust_fc_cp_gestion_domicilio::find($id_gestion_domicilio);

             //Si no encuentra el registro envia mensaje
           if (!$gestion_domicilio) {
               return response()->json(['errors' => array(['status' => 404, 'code_desc' => 'Not Found', 'title' => 'No se encontró el registro.', 'detail' => 'No existe el registro solicitado.'])], 404);
           }

           //Valida si se estan recibiendo los campos obligatorios
           $valid_domicilio = $this->validateDatosCP($request);

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
            
               //Asigna los nuevos valores
               $gestion_domicilio->id_enlace_domicilio = $request->input('id_enlace_domicilio');
               $gestion_domicilio->tipo_domicilio = $request->input('tipo_domicilio');
               $gestion_domicilio->nombre_domicilio = $request->input('nombre_domicilio');
               $gestion_domicilio->calle_domicilio = $request->input('calle_domicilio');
               $gestion_domicilio->numero_ext_domicilio = $request->input('numero_ext_domicilio');
               $gestion_domicilio->numero_int_domicilio = $request->input('numero_int_domicilio');
               $gestion_domicilio->referencia_domicilio = $request->input('referencia_domicilio');
               $gestion_domicilio->cp_domicilio = $request->input('cp_domicilio');
               $gestion_domicilio->clave_colonia_domicilio = $request->input('clave_colonia_domicilio');
               $gestion_domicilio->clave_localidad_domicilio = $request->input('clave_localidad_domicilio');
               $gestion_domicilio->clave_municipio_domicilio = $request->input('clave_municipio_domicilio');
               $gestion_domicilio->clave_estado_domicilio = $request->input('clave_estado_domicilio');
               $gestion_domicilio->clave_pais_domicilio = $request->input('clave_pais_domicilio');

               //Actualiza el registro
               $gestion_domicilio->update();
              
             // //Devuelve una respuesta confirmando que los datos se guardaron correctamente
           return response()->json(['status' => 'OK', 'data' => ['type' => 'gestion_domicilio', 'attributes' => $gestion_domicilio]], 200);
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
            $gestion_domicilio_deleted = xxcust_fc_cp_gestion_domicilio::where('id_gestion_domicilio', $id)->delete();

            //Si el registro no fue eliminado envia mensaje
           if (!$gestion_domicilio_deleted) {
               return response()->json(['errors' => array(['status' => 404, 'code_desc' => 'Not Found', 'title' => 'No se encontró el registro.', 'detail' => 'No existe ningún dato registrado.'])], 404);
            }
               //Devuelve una respuesta confirmando que el registro se elimino correctamente
           return response()->json(['status' => 'OK', 'message' => 'Se ha eliminado el registro.'], 200);
           
       } catch (\Exception $ex) {
           return response()->json(['errors' => array(['status' => 500, 'code_desc' => 'Internal Server Error', 'title' => 'Ocurrió un error al procesar la petición.', 'detail' => $ex->getMessage()])], 500);
       }
    }
}
