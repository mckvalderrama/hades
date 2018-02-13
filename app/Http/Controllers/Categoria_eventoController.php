<?php

namespace App\Http\Controllers;

use App\Categoria_evento;
use Validator;
use Response;
use Illuminate\Support\Facades\Input;
use App\http\Requests;
use Illuminate\Http\Request;
use DB;

class Categoria_eventoController extends Controller
{
     public function index()
    {
      
        return view('catevento.categoria_evento',[]);
    }

    public function getCatEventos()
    {
        $catevento = DB::table('categorias_eventos')
        ->select('categorias_eventos.id', 'categorias_eventos.nombre', 'categorias_eventos.activo')
        ->get();
        foreach ($catevento as $value) {
            $arreglo["data"][]=$value;
        }
        return Response::json($arreglo);
    }


    public function addCatEventos(Request $request){

        $activo =0;
        if ($request->activo) {
            $activo = 1;
        }

        $catevent = array(
            'nombre' => 'required'

            );

        $validator = Validator::make (Input::all(), $catevent);
        if ($validator->fails())
            return redirect()->back()->withErrors($validator->erros());
            //return Response::json(array('erros' => $validator->getMessageBag()->toarray()));
        else{
            $catevent = new Categoria_evento();
            $catevent->nombre = $request->nombre;
            $catevent->activo = $activo;
            $catevent->save();
            return redirect()->back();
        }

    }

    public function editCatEventos(request $request){
       $activo =0;
       if ($request->activo_edit) {
        $activo = 1;
    }
    $catevent = Categoria_evento::find($request->id_edit);
    $catevent->nombre = $request->nombre_edit;
    $catevent->activo = $activo;
    $catevent->save();
    return redirect()->back();
}

public function deleteCatEventos(Request $request){
    $catevent = Categoria_evento::find ($request->id_delete)->delete();
    return redirect()->back();
}

}
