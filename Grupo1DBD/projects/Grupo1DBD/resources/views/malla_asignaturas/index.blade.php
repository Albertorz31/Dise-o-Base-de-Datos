@extends('layout')
@section('contenido') 
<!DOCTYPE html>
<html>
 <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title> Malla Asignatura </title>
 </head>
 <body>
    <h1> Mallas Asignaturas </h1>
    @if(Session::has('notice'))
       <p> <strong> {{ Session::get('notice') }} </strong> </p>
    @endif
    <p> {{ link_to ('malla_asignaturas/create', 'Crear nueva malla asignatura') }} </p>
    @if($malla_asignatura->count())
       <table style="border: solid 1px #000;">
          <thead>
          <tr>
             <th style="width: 200px; border-bottom: solid 1px #000;"> ID </th>
             <th style="width: 200px; border-bottom: solid 1px #000;"> ID Asignatura </th>
             <th style="width: 100px; border-bottom: solid 1px #000;"> ID Malla </th>
             <th style="width: 50px; border-bottom: solid 1px #000;"> </th>
             <th style="width: 50px; border-bottom: solid 1px #000;"> </th>
             <th style="width: 50px; border-bottom: solid 1px #000;"> </th>
          </tr>
          </thead>
          <tbody>
          @foreach($malla_asignatura as $item)
             <tr>
                <td style="text-align: center;"> {{ $item->id }} </td>
                <td style="text-align: center;"> {{ $item->id_asignatura }} </td>
                <td style="text-align: center;"> {{ $item->id_malla}} </td>
                <td style="text-align: center;"> {{ link_to('malla_asignaturas/'.$item->id, 'Ver') }} </td>
                <td style="text-align: center;"> {{ link_to('malla_asignaturas/'.$item->id.'/edit', 'Editar') }} </td>
                <td style="text-align: center;"> 
                    {{ Form::open(array('url' => 'malla_asignaturas/'.$item->id)) }}
                        {{ Form::hidden("_method", "DELETE") }}
                       {{ Form::submit("Eliminar") }}
                   {{ Form::close() }}
                </td>
             </tr>
          @endforeach
          </tbody>
       </table>
    @else
       <p> No se han encontrado mallas asignaturas </p>
    @endif
 </body>
</html>
@endsection