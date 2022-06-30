<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Auth.Login');
});

//Rutas Auth
Route::get('Login', 'LoginController@index');
//Rutas index web Panel Principal
Route::get('Panel', 'PanelController@index')->name('Panel');
//Ruta index web Proceso Carta Porte LLenado
Route::get('ProcesoCP/{id}', 'ProcesoCPController@index')->name('procesocp');
//Ruta index web ConsultaYDescarga
Route::get('Consulta-Descarga', 'ProcesoCPController@indexconsultadescarga')->name('Consulta-Descarga');
//Ruta index web Modulo Domicilio
Route::get('Gestion-Domicilio', 'ModuloDomicilioController@index')->name('Gestion-Domicilio');
//Ruta index web Modulo Autotransporte
Route::get('Gestion-Autotransporte', 'ModuloAutotransporteController@index')->name('Gestion-Autotransporte');
//Ruta index web Modulo Operador
Route::get('Gestion-Operador', 'ModuloOperadorController@index')->name('Gestion-Operador');


