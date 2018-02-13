<?php

namespace App\Http\Controllers;

use App\Empleado;
use App\Persona;
use Validator;
use Response;
use Illuminate\Support\Facades\Input;
use App\http\Requests;
use Illuminate\Http\Request;
use DB;
class EmpleadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $persona = Persona::all();
        return view('personas.empleado',['personas' => $persona]);
    }

    public function getEmpleado(){

        $empleado = DB::table('empleados')
        ->join('personas','personas.id', '=', 'empleados.personas_id')
        ->select('empleados.id','empleados.sexo','empleados.domicilio','empleados.correo','personas.nombre','personas.ap','personas.am')
        ->get();
        foreach ($empleado as $value) {
            $arreglo["data"][]=$value;
        }

        return Response::json($arreglo);
    }

    public function addEmpleado(Request $request){
        $emple = array(
            'sexo' => 'required',
            'domicilio' => 'required',
            'correo',
            'persona_id' => 'required',
            'nombre' => 'required',
            'ap' => 'required',
            'am' => 'required'
        );




        $validator = Validator::make (Input::all(), $emple);
        if ($validator->fails())
            return redirect()->back()->withErrors($validator->errors());
            //return Response::json(array('erros' => $validator->getMessageBag()->toarray()));
        else{
            $emple = new Empleado();
            $emple->sexo = $request->sexo;
            $emple->domicilio = $request->domicilio;
            $emple->correo = $request->correo;
            $emple->save();
            return redirect()->back();

            
        }

    }

    public function editEmpleado(request $request){

        $emple = Empleado::find($request->id_edit);
        $emple->sexo = $request->sexo_edit;
        $emple->domicilio = $request->domicilio_edit;
        $emple->correo = $request->correo_edit;
        $emple->save();
        return redirect()->back();

       
    }

    public function deleteEmpleado(Request $request){
        $emple = Empleado::find ($request->id_delete)->delete();
        return redirect()->back();
    }
}

