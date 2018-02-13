<?php

namespace App\Http\Controllers;

use App\Inmueble;
use Validator;
use Response;
use Illuminate\Support\Facades\Input;
use App\http\Requests;
use Illuminate\Http\Request;
use DB;

class InmuebleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        
        return view('capillas.inmueble',[]);
    }

    public function getInmueble()
    {

        $inmueble = DB::table('inmuebles_salas')
        ->select('inmuebles_salas.id', 'inmuebles_salas.nombre')
        ->get();
        foreach ($inmueble as $value) {
            $arreglo["data"][]=$value;
        }
        return Response::json($arreglo);
    }


    public function addInmueble(Request $request){

        $inm = array(
            'nombre' => 'required'
            
            );

        $validator = Validator::make (Input::all(), $inm);
        if ($validator->fails())
            return redirect()->back()->withErrors($validator->erros());
            //return Response::json(array('erros' => $validator->getMessageBag()->toarray()));
        else{
            $inm = new Inmueble();
            $inm->nombre = $request->nombre;
            $inm->save();
            return redirect()->back();
        }

    }

    public function editInmueble(request $request){
  
    $inm = Inmueble::find($request->id_edit);
    $inm->nombre = $request->nombre_edit;
    $inm->save();
    return redirect()->back();
    
}

public function deleteInmueble(Request $request){
    $inm = Inmueble::find ($request->id_delete)->delete();
    return redirect()->back();
}
}
