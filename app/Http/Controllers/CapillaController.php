<?php

namespace App\Http\Controllers;

use App\Capilla;
use Validator;
use Response;
use Illuminate\Support\Facades\Input;
use App\http\Requests;
use Illuminate\Http\Request;
use DB;



class CapillaController extends Controller
{
	 public function index()
    {
        
        
        return view('capillas.capilla',[]);
    }

    public function getCapilla()
    {

        $capilla = DB::table('capillas')
        ->select('capillas.id', 'capillas.nombre', 'capillas.descripcion')
        ->get();
        foreach ($capilla as $value) {
            $arreglo["data"][]=$value;
        }
        return Response::json($arreglo);
    }


    public function addCapilla(Request $request){

        $cap = array(
            'nombre' => 'required',
            'descripcion' => 'required'
            );

        $validator = Validator::make (Input::all(), $cap);
        if ($validator->fails())
            return redirect()->back()->withErrors($validator->erros());
            //return Response::json(array('erros' => $validator->getMessageBag()->toarray()));
        else{
            $cap = new Capilla();
            $cap->nombre = $request->nombre;
           $cap->descripcion = $request->descripcion;
            $cap->save();
            return redirect()->back();
        }

    }

    public function editCapilla(request $request){
  
    $cap = Capilla::find($request->id_edit);
    $cap->nombre = $request->nombre_edit;
    $cap->descripcion = $request->descripcion_edit;
    $cap->save();
    return redirect()->back();
    
}

public function deleteCapilla(Request $request){
    $cap = Capilla::find ($request->id_delete)->delete();
    return redirect()->back();
}




}
