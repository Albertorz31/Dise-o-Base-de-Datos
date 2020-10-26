@extends('layout')
@section('contenido') 
<!DOCTYPE html>
<html>
 <head>
 	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title> Sección_Estudiantes </title>
 </head>
 <body>
    <h1> Sección_Estudiantes </h1>
    @if(Session::has('notice'))
       <p> <strong> {{ Session::get('notice') }} </strong> </p>
    @endif
    <p> {{ link_to ('seccion_estudiantes/create', 'Crear nuevo seccion_estudiantes') }} </p>
    @if($seccion_estudiantes->count())
       <table style="border: solid 1px #000;">
          <thead>
          <tr>
             <th style="width: 200px; border-bottom: solid 1px #000;"> Semestre </th>
             <th style="width: 50px; border-bottom: solid 1px #000;"> </th>
             <th style="width: 50px; border-bottom: solid 1px #000;"> </th>
             <th style="width: 50px; border-bottom: solid 1px #000;"> </th>
          </tr>
          </thead>
          <tbody>
          @foreach($seccion_estudiantes as $item)
             <tr>
                <td style="text-align: center;"> {{ $item->semestre}} </td>
                <td style="text-align: center;"> {{ link_to('seccion_estudiantes/'.$item->id, 'Ver') }} </td>
                <td style="text-align: center;"> {{ link_to('seccion_estudiantes/'.$item->id.'/edit', 'Editar') }} </td>
                <td style="text-align: center;"> 
                    {{ Form::open(array('url' => 'seccion_estudiantes/'.$item->id)) }}
                        {{ Form::hidden("_method", "DELETE") }}
                       {{ Form::submit("Eliminar") }}
                   {{ Form::close() }}
                </td>
             </tr>
          @endforeach
          </tbody>
       </table>
    @else
       <p> No se han encontrado seccion_estudiantes </p>
    @endif
 </body>
</html>
@endsection