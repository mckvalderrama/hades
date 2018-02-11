<?php

namespace App\Http\Controllers;

use App\Capilla;
use Validator;
use Response;
use Illuminate\Support\Facades\Input;
use App\http\Requests;
use Illuminate\Http\Request;



class CapillaController extends Controller
{
	public function index()
	{
       /*return view('persona', []);
       $personas = DB::personas('nombre', 'ap','am')->get();*/

       $capilla = Capilla::paginate(4);
       return view('capillas.capilla',compact('capilla'));
   }

   public function addCapilla(Request $request){
   	$cap = array(
   		'nombre' => 'required',
   		'descripcion' => 'required'
   		
   	);

   	$validator = Validator::make ( Input::all(), $cap);
   	if ($validator->fails())
   		return Response::json(array('erros'=> $validator->getMessageBag()->toarray()));

   	else{
   		$cap = new Capilla;
   		$cap->nombre = $request->nombre;
   		$cap->descripcion = $request->descripcion;
   		$cap->save();
   		return response()->json($cap);
   	}


   }

   public function editCapilla(request $request){
   	$cap = Capilla::find ($request->id);
   	$cap->nombre = $request->nombre;
   	$cap->descripcion = $request->descripcion;
   	$cap->save();
   	return response()->json($cap);
   }

   public function deleteCapilla(request $request){
   	$cap = Capilla::find ($request->id)->delete();
   	return response()->json();
   }





}
