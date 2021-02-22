<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;

class alumnosController extends Controller
{
    public function consultar(){
        $alumno = Alumno::all();
        return response()->json($alumno);
    }

    public function guadar(Request $request){

        if($request->editar == 1){
            $alumno = Alumno::find($request->idAlumno);
        }else{
            $alumno = new Alumno();
        }
        $alumno->nombre = $request->nombre;
        $alumno->paterno = $request->paterno;
        $alumno->materno = $request->materno;

        $alumno->save();
        return response()->json('guardado con éxito');
    }

    public function eliminar(Request $request){
        $alumno = new Alumno();
        $alumno->destroy($request->idAlumno);
        return response()->json('eliminado con éxito');
    }

    public function obtenerAlumno(Request $request){
        return response()->json(Alumno::find($request->idAlumno));
    }
}
