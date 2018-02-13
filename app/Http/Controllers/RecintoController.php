<?php

namespace App\Http\Controllers;

use App\Recinto;
use App\Statu;
use Validator;
use Response;
use Illuminate\Support\Facades\Input;
use App\http\Requests;
use Illuminate\Http\Request;
use DB;
class RecintoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {
        $status = Statu::all();
        return view('recintos.recinto',['status' => $status]);
    }

    public function getRecinto()
    {
        $recintos = DB::table('recintos')
        ->join('status', 'status.id', '=', 'recintos.status_id')
        ->select('recintos.id', 'recintos.nombre', 'recintos.activo', 'status.statu')
        ->get();
        foreach ($recintos as $value) {
            $arreglo["data"][]=$value;
        }
        return Response::json($arreglo);
    }


    public function addRecinto(Request $request){

        $activo =0;
        if ($request->activo) {
            $activo = 1;
        }

        $recin = array(
            'nombre' => 'required',
            'statu_id' => 'required'

            );

        $validator = Validator::make (Input::all(), $recin);
        if ($validator->fails())
            return redirect()->back()->withErrors($validator->erros());
            //return Response::json(array('erros' => $validator->getMessageBag()->toarray()));
        else{
            $recin = new Recinto();
            $recin->nombre = $request->nombre;
            $recin->activo = $activo;
            $recin->status_id = $request->statu_id;
            $recin->save();
            return redirect()->back();
        }

    }

    public function editRecinto(request $request){
       $activo =0;
       if ($request->activo_edit) {
        $activo = 1;
    }
    $recin = Recinto::find($request->id_edit);
    $recin->nombre = $request->nombre_edit;
    $recin->activo = $activo;
    $recin->status_id = $request->statu_id_edit;
    $recin->save();
    return redirect()->back();
}

public function deleteRecinto(Request $request){
    $recin = Recinto::find ($request->id_delete)->delete();
    return redirect()->back();
}

}
