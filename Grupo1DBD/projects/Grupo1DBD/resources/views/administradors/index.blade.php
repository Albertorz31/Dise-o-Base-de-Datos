@extends('layout')
@section('contenido') 
<!DOCTYPE html>
<html>
 <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title> Administradores </title>
 </head>
 <body>
    <h1> Administradores </h1>
    @if(Session::has('notice'))
       <p> <strong> {{ Session::get('notice') }} </strong> </p>
    @endif
    <p> {{ link_to ('administradors/create', 'Crear nuevo administrador') }} </p>
    @if($administradors->count())
       <table style="border: solid 1px #000;">
          <thead>
          <tr>
             <th style="width: 200px; border-bottom: solid 1px #000;"> Nombre </th>
             <th style="width: 200px; border-bottom: solid 1px #000;"> Fecha de nacimiento </th>
             <th style="width: 50px; border-bottom: solid 1px #000;"> Correo </th>
             <th style="width: 50px; border-bottom: solid 1px #000;"> Telefono </th>
             <th style="width: 50px; border-bottom: solid 1px #000;"> </th>
             <th style="width: 50px; border-bottom: solid 1px #000;"> </th>
             <th style="width: 50px; border-bottom: solid 1px #000;"> </th>
          </tr>
          </thead>
          <tbody>
          @foreach($administradors as $item)
             <tr>
                <td style="text-align: center;"> {{ $item->nombre_administrador }} </td>
                <td style="text-align: center;"> {{ $item->fecha_nacimiento_administrador }} </td>
                <td style="text-align: center;"> {{ $item->email }} </td>
                <td style="text-align: center;"> {{ $item->telefono_adminstrador }} </td>
                <td style="text-align: center;"> {{ link_to('administradors/'.$item->id, 'Ver') }} </td>
                <td style="text-align: center;"> {{ link_to('administradors/'.$item->id.'/edit', 'Editar') }} </td>
                <td style="text-align: center;">
                    {{ Form::open(array('url' => 'administradors/'.$item->id)) }}
                        {{ Form::hidden("_method", "DELETE") }}
                       {{ Form::submit("Eliminar") }}
                   {{ Form::close() }}
                </td>
             </tr>
          @endforeach
          </tbody>
       </table>
    @else
       <p> No se han encontrado administradors </p>
    @endif
 </body>
</html>
@endsection