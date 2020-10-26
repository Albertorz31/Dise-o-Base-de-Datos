@extends('layout')
@section('contenido')
        <!DOCTYPE html>
<html>
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <title> Guardar malla asignatura </title>
 </head>
 <body>
    <h1> Guardar malla asignatura </h1>
    {{ Form::open(array('url' => 'malla_asignaturas/' . $malla_asignatura->id)) }}
       {{ Form::label ('id', 'ID') }}
       <br />
       {{ Form::text ('id', $malla_asignatura->id) }}
       <br />

       {{ Form::label ('id_malla', 'ID Malla') }}
       <br />
       {{ Form::text ('id_malla', $malla_asignatura->id_malla) }}
       <br />

       {{ Form::label ('id_asignatura', 'ID Semestre') }}
       <br />
       {{ Form::text ('id_asignatura', $malla_asignatura->id_asignatura) }}
       <br />

       
       @if($malla_asignatura->id)
          {{ Form::hidden ('_method', 'PUT') }}
       @else
         
       @endif
       
       {{ Form::submit('Guardar malla asignatura') }}
       {{ link_to('malla_asignaturas', 'Cancelar') }}
    {{ Form::close() }}
 </body>
</html>
@endsection