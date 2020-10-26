@extends('layout')
@section('contenido')
        <!DOCTYPE html>
<html>
 <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title> Datos de malla asignatura </title>
 </head>
 <body>
    <h1> {{ $malla_asignatura->id }} </h1>
    <ul>
       <li> ID Asignatura: {{ $malla_asignatura->id_asignatura }} </li>
       <li> ID Malla: {{ $malla_asignatura->id_malla }} </li>
    </ul>
    
    <a href="{{ url ('malla_asignaturas') }}">Volver atrás</a>
 </body>
</html>
@endsection