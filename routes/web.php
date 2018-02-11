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



Route::get('', 'InicioController@index');
/*Para logearse*/Route::post('Bienvenido','InicioController@inicio');
/*para cerrar sesion*/Route::get('cerrar_session','InicioController@session_destroy');


/*para mandar a vista persona*/ Route::get('personas','PersonaController@index');
/*para mandar a vista persona*/ Route::get('index','PersonaController@persona');
/*Route::post('registrar nueva persona','PersonaController@store');*/



//Route::get('/','PersonaController@persona');
//Route::resource('persona','PersonaController@persona');
Route::POST('addPersona','PersonaController@addPersona');
Route::POST('editPersona','PersonaController@editPersona');
Route::POST('deletePersona','PersonaController@deletePersona');

Route::get('Recintos','RecintoController@index');


Route::get('inicio','CapillaController@index');
Route::post('addCapilla','CapillaController@addCapilla');
Route::post('editCapilla','CapillaController@editCapilla');
Route::post('deleteCapilla','CapillaController@deleteCapilla');

Route::get('Inicio','Categoria_eventoController@index');
Route::post('addCategoria','Categoria_eventoController@addCategoria');
Route::post('editCategoria','Categoria_eventoController@editCategoria');
Route::post('deleteCategoria','Categoria_eventoController@deleteCategoria');





