@extends('coordinadors/layoutcoordinador')
@extends('main')
@section('contenido') 
<!DOCTYPE html>
<html>
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <title> Guardar Seccion </title>
 </head>
 <body>
    <h1> Guardar Sección </h1>
    {{ Form::open(array('url' => 'seccions/' . $seccion->id)) }}
       {{ Form::label ('id', 'ID') }}
       <br />
       {{ Form::text ('id', $seccion->id) }}
       <br />

       {{ Form::label ('tipo_seccion', 'Tipo de sección') }}
       <br />
       {{ Form::text ('tipo_seccion', $seccion->tipo_seccion) }}
       <br />

       {{ Form::label ('sala', 'Sala') }}
       <br />
       {{ Form::text ('sala', $seccion->sala) }}
       <br />

       {{ Form::label ('modulo', 'Módulo') }}
       <br />
       {{ Form::text ('modulo', $seccion->modulo) }} 
       <br /> 
       
       {{ Form::label ('id_asignatura', 'ID asignatura') }}
       <br />
       {{ Form::text ('id_asignatura', $seccion->id_asignatura) }}
       <br />

       {{ Form::label ('id_horario', 'ID horario') }}
       <br />
       {{ Form::text ('id_horario', $seccion->id_horario) }}
       <br />


       @if($seccion->id)
          {{ Form::hidden ('_method', 'PUT') }}
       @else
         
       @endif
       
       {{ Form::submit('Guardar sección') }}
       {{ link_to('seccions', 'Cancelar') }}
    {{ Form::close() }}
 </body>
</html>
@endsection