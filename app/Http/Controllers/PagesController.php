<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Estudiante;
use App\Models\Estudiante_detalle;

class PagesController extends Controller
{
    public function fnIndex(){
        return view ('welcome');
    }
    
    public function fnEstDetalle ($id) {
        $xDetAlumnos = Estudiante_detalle::findOrFail($id);
        return view ('Estudiante.pagDetalle', compact('xDetAlumnos'));
       
    }

    public function fnEstActualizar ($id) {
        $xActAlumnos = Estudiante::findOrFail($id);
        return view ('Estudiante.pagActualizar', compact('xActAlumnos'));
    }
    

    public function fnUpdate(Request $request, $id){

        $xUpdateAlumnos = Estudiante::findOrFail($id);

        $xUpdateAlumnos -> codEst = $request -> codEst;
        $xUpdateAlumnos -> nomEst = $request -> nomEst;
        $xUpdateAlumnos -> apeEst = $request -> apeEst;
        $xUpdateAlumnos -> fnaEst = $request -> fnaEst;
        $xUpdateAlumnos -> turMat = $request -> turMat;
        $xUpdateAlumnos -> semMat = $request -> semMat;
        $xUpdateAlumnos -> estMat = $request -> estMat;

        $xUpdateAlumnos -> save();

        return back()->with('msj','Se actualizo con exito...');
    }



    public function fnRegistrar (Request $request) {

        $request -> validate([
            'codEst'=>'required',
            'nomEst'=>'required',
            'apeEst'=>'required',
            'fnaEst'=>'required',
            'turMat'=>'required',
            'semMat'=>'required',
            'estMat'=>'required'
    ]);

    $nuevoEstudiante = new Estudiante; 

    $nuevoEstudiante->codEst = $request->codEst;
    $nuevoEstudiante->nomEst = $request->nomEst;
    $nuevoEstudiante->apeEst = $request->apeEst;
    $nuevoEstudiante->fnaEst = $request->fnaEst;
    $nuevoEstudiante->turMat = $request->turMat;
    $nuevoEstudiante->semMat = $request->semMat;
    $nuevoEstudiante->estMat = $request->estMat;
    
    $nuevoEstudiante->save();

    return back()->with('msj', 'Se registro con exito...');
    }
    
    public function fnEliminar ($id){
        $deleteAlumno = Estudiante::findOrFail($id);
        $deleteAlumno-> delete();
    return back()->with('msj','Se elimino con exito...');
    }


    public function fnLista(){
        $xAlumnos = Estudiante:: all();
        return view('pagLista', compact('xAlumnos'));
    }
    public function fnGaleria($num=0){
        $valor =$num;
        $otro  = 25;
        return view ('pagGaleria', compact('valor','otro'));
    }
    

}
