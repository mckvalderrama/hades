<?php

namespace App\Http\Controllers;

use App\Persona;
use Validator;
use Response;
use Illuminate\Support\Facades\Input;
use App\http\Requests;
use Illuminate\Http\Request;


class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       /*return view('persona', []);
       $personas = DB::personas('nombre', 'ap','am')->get();*/

       $persona = Persona::paginate(4);
       return view('personas.persona',compact('persona'));
   }

   public function addPersona(Request $request){
    $per = array(
        'nombre' => 'required',
        'ap' => 'required',
        'am' => 'required'
    );

    $validator = Validator::make ( Input::all(), $per);
    if ($validator->fails())
        return Response::json(array('erros'=> $validator->getMessageBag()->toarray()));

    else{
        $per = new Persona;
        $per->nombre = $request->nombre;
        $per->ap = $request->ap;
        $per->am = $request->am;
        $per->save();
        return response()->json($per);
    }

    
}

public function editPersona(request $request){
    $per = Persona::find ($request->id);
    $per->nombre = $request->nombre;
    $per->ap = $request->ap;
    $per->am = $request->am;
    $per->save();
    return response()->json($per);
}

public function deletePersona(request $request){
    $per = Persona::find ($request->id)->delete();
    return response()->json();
}




}
