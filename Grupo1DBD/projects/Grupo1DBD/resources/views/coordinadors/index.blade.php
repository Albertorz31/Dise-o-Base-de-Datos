@extends('administradors/layoutadmin')
@section('contenido') 
<!DOCTYPE html>
<html>
 <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title> Coordinadores </title>
 </head>
 <body>
    <h1> Coordinadores </h1>
    @if(Session::has('notice'))
       <p> <strong> {{ Session::get('notice') }} </strong> </p>
    @endif
    <p> {{ link_to ('coordinadors/create', 'Crear nuevo coordinador') }} </p>
    @if($coordinadors->count())
       <table class="table">
          <thead class="thead-dark">
          <tr>
             <th style="text-align: center;" scope="col"> Nombre </th>
             <th style="text-align: center;" scope="col"> Fecha de nacimiento </th>
             <th style="text-align: center;" scope="col"> Correo </th>
             <th style="text-align: center;" scope="col"> Telefono </th>
             <th style="text-align: center;" scope="col"> Tipo </th>
             <th style="text-align: center;" scope="col"> </th>
             <th style="text-align: center;" scope="col"> </th>
             <th style="text-align: center;" scope="col"> </th>
          </tr>
          </thead>
          <tbody>
          @foreach($coordinadors as $item)
             <tr>
                <td style="text-align: center;"> {{ $item->nombre_coordinador }} </td>
                <td style="text-align: center;"> {{ $item->fecha_nacimiento_coordinador }} </td>
                <td style="text-align: center;"> {{ $item->email}} </td>
                <td style="text-align: center;"> {{ $item->telefono_coordinador }} </td>
                <td style="text-align: center;"> {{ $item->tipo_coordinador }} </td>
                <td style="text-align: center;"> {{ link_to('coordinadors/'.$item->id, 'Ver') }} </td>
                <td style="text-align: center;"> {{ link_to('coordinadors/'.$item->id.'/edit', 'Editar') }} </td>
                <td style="text-align: center;"> 
                    {{ Form::open(array('url' => 'coordinadors/'.$item->id)) }}
                        {{ Form::hidden("_method", "DELETE") }}
                       {{ Form::submit("Eliminar") }}
                   {{ Form::close() }}
                </td>
             </tr>
          @endforeach
          </tbody>
       </table>
    @else
       <p> No se han encontrado coordinadors </p>
    @endif
 </body>
</html>
@endsection