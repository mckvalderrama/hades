<?php

namespace App\Http\Controllers;

use App\Categoria_evento;
use Validator;
use Response;
use Illuminate\Support\Facades\Input;
use App\http\Requests;
use Illuminate\Http\Request;

class Categoria_eventoController extends Controller
{
    public function index()
	{
       /*return view('persona', []);
       $personas = DB::personas('nombre', 'ap','am')->get();*/

       $categoria_evento = Categoria_evento::paginate(4);
       return view('catevento.categoria_evento',compact('categoria_evento'));
   }

   public function addCatevento(Request $request){
   	$catevento = array(
   		'nombre' => 'required',
   		'activo' => 'required'
   		
   	);

   	$validator = Validator::make ( Input::all(), $catevento);
   	if ($validator->fails())
   		return Response::json(array('erros'=> $validator->getMessageBag()->toarray()));

   	else{
   		$catevento = new Categoria_evento;
   		$catevento->nombre = $request->nombre;
   		$catevento->activo = $request->activo;
   		$catevento->save();
   		return response()->json($catevento);
   	}


   }

   public function editCatevento(request $request){
   	$catevento = Categoria_evento::find ($request->id);
   	$catevento->nombre = $request->nombre;
   	$catevento->activo = $request->activo;
   	$catevento->save();
   	return response()->json($catevento);
   }

   public function deleteCatevento(request $request){
   	$catevento = Categoria_evento::find ($request->id)->delete();
   	return response()->json();
   }
}
