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



// RUTAS DE REGISTRAR PERSONAS //
//Route::get('/','PersonaController@persona');
//Route::resource('persona','PersonaController@persona');
Route::POST('addPersona','PersonaController@addPersona');
Route::POST('editPersona','PersonaController@editPersona');
Route::POST('deletePersona','PersonaController@deletePersona');
// RUTAS DE REGISTRAR PERSONAS //

// RUTAS DE REGISTRAR RECINTOS //
Route::get('Recintos','RecintoController@index');
Route::get('getRecinto','RecintoController@getRecinto');
Route::post('addRecinto','RecintoController@addRecinto');
Route::post('editRecinto','RecintoController@editRecinto');
Route::post('deleteRecinto','RecintoController@deleteRecinto');
// RUTAS DE REGISTRAR RECINTOS //

// RUTAS DE REGISTRAR CAPILLAS //
Route::get('Capilla','CapillaController@index');
Route::get('getCapilla','CapillaController@getCapilla');
Route::post('addCapilla','CapillaController@addCapilla');
Route::post('editCapilla','CapillaController@editCapilla');
Route::post('deleteCapilla','CapillaController@deleteCapilla');
// RUTAS DE REGISTRAR CAPILLAS //

// RUTAS DE REGISTRAR TIPOS EVENTOS //
Route::get('Categorias de eventos','Categoria_eventoController@index');
Route::get('getCategoriaEvento','Categoria_eventoController@getCatEventos');
Route::post('addCategoria','Categoria_eventoController@addCatEventos');
Route::post('editCategoria','Categoria_eventoController@editCatEventos');
Route::post('deleteCategoria','Categoria_eventoController@deleteCatEventos');
// RUTAS DE REGISTRAR TIPOS EVENTOS //

Route::get('Servicios','ServicioController@index');


Route::get('Empleados','EmpleadosController@index');
Route::get('getEmpleado','EmpleadosController@getEmpleado');
Route::post('addEmpleado','EmpleadosController@addEmpleado');
Route::post('editEmpleado','EmpleadosController@editEmpleado');
Route::post('deleteEmpleado','EmpleadosController@deleteEmpleado');


Route::get('Inmuebles','InmuebleController@index');
Route::get('getInmueble','InmuebleController@getInmueble');
Route::post('addInmueble','InmuebleController@addInmueble');
Route::post('editInmueble','InmuebleController@editInmueble');
Route::post('deleteInmueble','InmuebleController@deleteInmueble');



