@extends('pagPlantilla')

@section('titulo')
    <h1 class="display-4">Pagina lista</h1>
@endsection

@section('seccion')
   <h3> Detalle estudiante </h3>

   <p>Id:                    {{ $xDetAlumnos->id}} </p>
   <p>Practica Modular 1:    {{ $xDetAlumnos->praMod1}} </p>
   <p>Practica Modular 2:    {{ $xDetAlumnos->praMod2}} </p>
   <p>Practica Modular 3:    {{ $xDetAlumnos->praMod3}} </p>
   <p>Unidad Didactica 1:    {{ $xDetAlumnos->udMod1}} </p>
   <p>Unidad Didactica 2:    {{ $xDetAlumnos->udMod2}} </p>
   <p>Unidad Didactica 3:    {{ $xDetAlumnos->udMod3}} </p>
   <p>Certificado en Idioma:   {{ $xDetAlumnos->ceridi}} </p>
   <p>Modalidad Titulación:   {{ $xDetAlumnos->modTit}} </p>
   <p>Fecha de registro del detalle:   {{ $xDetAlumnos->fecDet}} </p>
   <p>Estado detalle:   {{ $xDetAlumnos->estDet}} </p>
   @endsection