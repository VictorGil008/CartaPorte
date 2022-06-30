<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class PanelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $busqueda = trim($request->get('search'));
        $panel_proceso = DB::table('EBS_CP_TRANSF_V')
        ->select('envio_num', 'origen_num', 'origen_nombre', 'destino_num', 'destino_nombre')
        ->orwhere("envio_num", "LIKE", "%" . $busqueda)
        ->paginate(50);

        if ( $panel_proceso->count() <= 0) {
           alert()->warning('Envio Num','No Existe.');
         }
       
        return view('Cuerpo.Panel', ['panel_proceso' => $panel_proceso, 'busqueda' => $busqueda]);
        // return response()->json(['status' => 'OK', 'data' => ['type' => 'EBS_CP_TRANSF_V', 'attributes' => $panel_proceso]], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
