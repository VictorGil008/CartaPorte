<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Ruta ProcesoCP
Route::get('DatosCP/{id}', 'ProcesoCPController@union'); //Trae Vistas De Oracle
Route::get('DatosCP-Listado', 'ProcesoCPController@listar');
Route::post('DatosCP', 'ProcesoCPController@store');

//Rutas Gestion Domicilio
Route::get('Gestion-Domicilio-Listado', 'ModuloDomicilioController@listar');
Route::get('Gestion-Domicilio-Listado/{id}', 'ModuloDomicilioController@show');
Route::get('Gestion-Domicilio-Editar/{id}', 'ModuloDomicilioController@edit');
Route::post('Gestion-Domicilio', 'ModuloDomicilioController@store');
Route::put('Gestion-Domicilio/{id}', 'ModuloDomicilioController@update');
Route::delete('Gestion-Domicilio-Eliminar/{id}', 'ModuloDomicilioController@destroy');

//Rutas Gestion Autotransporte
Route::get('Gestion-Autotransporte-Listado', 'ModuloAutotransporteController@listar');
Route::get('Gestion-Autotransporte-Listado/{id}', 'ModuloAutotransporteController@show');
Route::get('Gestion-Autotransporte-Editar/{id}', 'ModuloAutotransporteController@edit');
Route::post('Gestion-Autotransporte', 'ModuloAutotransporteController@store');
Route::put('Gestion-Autotransporte/{id}', 'ModuloAutotransporteController@update');
Route::put('Gestion-Autotransporte-Placa/{id}', 'ModuloAutotransporteController@updateplaca');
Route::put('Gestion-Autotransporte-PolizaCivil/{id}', 'ModuloAutotransporteController@updatepolizacivil');
Route::put('Gestion-Autotransporte-PolizaCarga/{id}', 'ModuloAutotransporteController@updatepolizacarga');
Route::delete('Gestion-Autotransporte-Eliminar/{id}', 'ModuloAutotransporteController@destroy');

//Rutas Gestion Operador
Route::get('Gestion-Operador-Listado', 'ModuloOperadorController@listar');
Route::get('Gestion-Operador-Listado/{id}', 'ModuloOperadorController@show');
Route::post('Gestion-Operador', 'ModuloOperadorController@store');
Route::put('Gestion-Operador/{id}', 'ModuloOperadorController@update');
Route::put('Gestion-Operador-Licencia/{id}', 'ModuloOperadorController@updatelicencia');
Route::delete('Gestion-Operador-Eliminar/{id}', 'ModuloOperadorController@destroy');
