@extends('layout')
@section('contenido') 
<!DOCTYPE html>
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title> Administrador_Profesor </title>
 </head>
 <body>
    <h1> Administrador Profesor </h1>
    @if(Session::has('notice'))
       <p> <strong> {{ Session::get('notice') }} </strong> </p>
    @endif
    <p> {{ link_to ('administrador_profesors/create', 'Crear nuevo administrador profesor') }} </p>
    @if($administrador_profesors->count())
       <table style="border: solid 1px #000;">
          <thead>
          <tr>
             <th style="width: 100px; border-bottom: solid 1px #000;"> ID </th>
             <th style="width: 200px; border-bottom: solid 1px #000;"> ID Administrador</th>
             <th style="width: 200px; border-bottom: solid 1px #000;"> ID Profesor </th>
             <th style="width: 50px; border-bottom: solid 1px #000;"> </th>
             <th style="width: 50px; border-bottom: solid 1px #000;"> </th>
             <th style="width: 50px; border-bottom: solid 1px #000;"> </th>
          </tr>
          </thead>
          <tbody>
          @foreach($administrador_profesors as $item)
             <tr>
                <td style="text-align: center;"> {{ $item->id }} </td>
                <td style="text-align: center;"> {{ $item->id_administrador }} </td>
                <td style="text-align: center;"> {{ $item->id_profesor}} </td>
                <td style="text-align: center;"> {{ link_to('administrador_profesors/'.$item->id, 'Ver') }} </td>
                <td style="text-align: center;"> {{ link_to('administrador_profesors/'.$item->id.'/edit', 'Editar') }} </td>
                <td style="text-align: center;">
                    {{ Form::open(array('url' => 'administrador_profesors/'.$item->id)) }}
                        {{ Form::hidden("_method", "DELETE") }}
                       {{ Form::submit("Eliminar") }}
                   {{ Form::close() }}
                </td>
             </tr>
          @endforeach
          </tbody>
       </table>
    @else
       <p> No se han encontrado administrador_profesors </p>
    @endif
 </body>
</html>
@endsection