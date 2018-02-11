<?php

namespace App\Http\Controllers;

use App\Recinto;
use Validator;
use Response;
use Illuminate\Support\Facades\Input;
use App\http\Requests;
use Illuminate\Http\Request;

class RecintoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recinto = Recinto::paginate(4);
        return view('recintos.recinto',compact('recinto'));
    }

    public function addRecinto(Request $request){
        $recin = array(
            'nombre' => 'required',
            'activo' => 'requered',
            'statu_id' => 'required'

        );

        $validatos = Validator::make ( Input::all(), $recin);
        if ($validator->fails())
            return Response::json(array('erros' => $validator->getMessageBag()->toarray()));

        else{
            $recin = new Recinto;
            $recin->nombre = $request->nombre;
            $recin->activo = $request->activo;
            $recin->statu_id = $request->statu_id;
            $recin->save();
            return response()->json($recin);
        }

    }

    public function editRecinto(request $request){
        $recin = Recinto::find ($request->id);
        $recin->nombre = $request->nombre;
        $recin->activo = $request->activo;
        $recin->statu_id = $request->statu_id;
        $recin->save();
        return response()->json($recin);
    }

    public function deleteRecinto(Request $request){
        $recin = Recinto::find ($request->id)->delete();
        return response()->json();
    }

    public function MostrarRecinto(Request $request){

        DB::table('recintos')
        ->join('statu','id', '=', 'status_id')
        ->join('orders', 'id', '=' 'status_id')
        ->select('status_id', 'statu')
        ->get();
    }
    
}
