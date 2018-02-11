<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use DB;
use Validator;
class InicioController extends Controller
{
    	public function index()
	{
		return view('index', []);
	}

	
     /* @return \Illuminate\Http\Response
     */

     public function inicio(Request $request)
     {
           //confirmacion y validacion de usuario
     	$validator = Validator::make(
     		$request->all(),
     		[
     			'user' => 'required',
     			'pass' => 'required'
     		]
     	);

     	$validator->after(function($validator) use($request){
     		if (!Usuario::where('usuario','=',$request->user)->where('contrasena','=',$request->pass)->exists()) {
     			$validator->errors()->add('erros_user', 'El usuario o la contraseña no es valido!');
     		}
     	});
     	if (!$validator->fails()) {

            //Obtener datos de el usuario para la sesssion
     		$data_user = Usuario::select(DB::raw("usuario, contrasena"))->where('usuario','=',$request->user)->where('contrasena','=',$request->pass)->first();

            //Se crea la session con las variables necesarias
     		session(['name_user' => $data_user->nombre, 'usuario' => $data_user->usuario, 'contrasena' => $data_user->contrasena]);

           // Obtener y mandar a la vista toda la informacion de los usuarios registrados en el sistema
     		$resultado = Usuario::where('usuario','<>',$request->user)->where('contrasena','<>',$request->pass)->get();
     		return view('inicio', ['usuarios' => $resultado]);

     	}else{
     		return redirect()->back()->withErrors($validator->errors())->withInput($request->all);
     	}
     }

   /* public function inicio_user()
    {
        if (session()->has('usuario') && session()->has('name_user')) {
           //Obtener y mandar a la vista toda la informacion de los usuarios registrados en el sistema
            $resultado = Usuario::where('usuario','<>',session()->get('usuario'))->where('contrasena','<>',session()->get('contrasena'))->get();
            return view('index', ['usuarios' => $resultado]);
        }else{
            return redirect(action('UsuarioController@login'));
        }
        

    }*/

    public function session_destroy()
    {
    	session()->flush();
    	return redirect(action('InicioController@index'));
    }

}
