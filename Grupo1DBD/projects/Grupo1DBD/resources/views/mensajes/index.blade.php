@extends('administradors/layoutadmin')
@section('contenido') 
<!DOCTYPE html>
<html>
 <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title> Mensajes </title>
 </head>
 <body>
    <h1> Mensajes </h1>
    @if(Session::has('notice'))
       <p> <strong> {{ Session::get('notice') }} </strong> </p>
    @endif
    <p> {{ link_to ('mensajes/create', 'Crear nuevo mensaje') }} </p>
    @if($mensajes->count())
       <table class="table">
          <thead class="thead-dark">
          <tr>
             <th style="text-align: center;" scope="col"> Correo Asociado </th>
             <th style="text-align: center;" scope="col"> Texto </th>
             <th style="text-align: center;" scope="col"> Fecha de Envío </th>
             <th style="text-align: center;" scope="col"> Hora de Envío </th>
             <th style="text-align: center;" scope="col"> Remitente </th>
             <th style="text-align: center;" scope="col"> </th>
             <th style="text-align: center;" scope="col"> </th>
             <th style="text-align: center;" scope="col"> </th>
          </tr>
          </thead>
          <tbody>
          @foreach($mensajes as $item)
             <tr>
                <td style="text-align: center;"> {{ $item->correo_asociado }} </td>
                <td style="text-align: center;"> {{ $item->texto }} </td>
                <td style="text-align: center;"> {{ $item->fecha_envio }} </td>
                <td style="text-align: center;"> {{ $item->hora_envio }} </td>
                <td style="text-align: center;"> {{ $item->envia }} </td>
                <td style="text-align: center;"> {{ link_to('mensajes/'.$item->id, 'Ver') }} </td>
                <td style="text-align: center;"> {{ link_to('mensajes/'.$item->id.'/edit', 'Editar') }} </td>
                <td style="text-align: center;"> 
                    {{ Form::open(array('url' => 'mensajes/'.$item->id)) }}
                        {{ Form::hidden("_method", "DELETE") }}
                       {{ Form::submit("Eliminar") }}
                   {{ Form::close() }}
                </td>
             </tr>
          @endforeach
          </tbody>
       </table>
    @else
       <p> No se han encontrado mensajes </p>
    @endif
 </body>
</html>
@endsection