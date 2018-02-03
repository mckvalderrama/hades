<?php

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



Route::get('', 'CapillaController@index');
/*Para logearse*/Route::post('Bienvenido','CapillaController@inicio');
/*para cerrar sesion*/Route::get('cerrar_session','CapillaController@session_destroy');


/*para mandar a vista persona*/ Route::get('Personas','PersonaController@persona');
