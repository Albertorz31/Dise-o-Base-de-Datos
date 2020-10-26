@extends('layout')
@section('contenido') 
<!DOCTYPE html>
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title> Administrador_Estudiante </title>
 </head>
 <body>
    <h1> Administrador Estudiante </h1>
    @if(Session::has('notice'))
       <p> <strong> {{ Session::get('notice') }} </strong> </p>
    @endif
    <p> {{ link_to ('administrador_estudiantes/create', 'Crear nuevo administrador estudiante') }} </p>
    @if($administrador_estudiantes->count())
       <table style="border: solid 1px #000;">
          <thead>
          <tr>
             <th style="width: 100px; border-bottom: solid 1px #000;"> ID </th>
             <th style="width: 200px; border-bottom: solid 1px #000;"> ID Administrador</th>
             <th style="width: 200px; border-bottom: solid 1px #000;"> ID Estudiante </th>
             <th style="width: 50px; border-bottom: solid 1px #000;"> </th>
             <th style="width: 50px; border-bottom: solid 1px #000;"> </th>
             <th style="width: 50px; border-bottom: solid 1px #000;"> </th>
          </tr>
          </thead>
          <tbody>
          @foreach($administrador_estudiantes as $item)
             <tr>
                <td style="text-align: center;"> {{ $item->id }} </td>
                <td style="text-align: center;"> {{ $item->id_administrador }} </td>
                <td style="text-align: center;"> {{ $item->id_estudiante}} </td>
                <td style="text-align: center;"> {{ link_to('administrador_estudiantes/'.$item->id, 'Ver') }} </td>
                <td style="text-align: center;"> {{ link_to('administrador_estudiantes/'.$item->id.'/edit', 'Editar') }} </td>
                <td style="text-align: center;">
                    {{ Form::open(array('url' => 'administrador_estudiantes/'.$item->id)) }}
                        {{ Form::hidden("_method", "DELETE") }}
                       {{ Form::submit("Eliminar") }}
                   {{ Form::close() }}
                </td>
             </tr>
          @endforeach
          </tbody>
       </table>
    @else
       <p> No se han encontrado administrador_estudiantess </p>
    @endif
 </body>
</html>
@endsection