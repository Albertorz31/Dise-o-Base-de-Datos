@extends('administradors/layoutadmin')
@section('contenido') 
<!DOCTYPE html>
<html>
 <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title> Direcciones </title>
 </head>
 <body>
    <h1> Direcciones </h1>
    @if(Session::has('notice'))
       <p> <strong> {{ Session::get('notice') }} </strong> </p>
    @endif
    <p> {{ link_to ('direccions/create', 'Crear nueva direccion') }} </p>
    @if($direccions->count())
       <table class="table">
          <thead class="thead-dark">
          <tr>
             <th style="text-align: center;" scope="col"> Comuna </th>
             <th style="text-align: center;" scope="col"> Calle </th>
             <th style="text-align: center;" scope="col"> Nombre direccion </th>
             <th style="text-align: center;" scope="col"> Numero </th>
             <th style="text-align: center;" scope="col"> Region </th>
             <th style="text-align: center;" scope="col"> Pais </th>
             <th style="text-align: center;" scope="col"> </th>
             <th style="text-align: center;" scope="col"> </th>
             <th style="text-align: center;" scope="col"> </th>
          </tr>
          </thead>
          <tbody>
          @foreach($direccions as $item)
             <tr>
                <td style="text-align: center;"> {{ $item->comuna_direccion }} </td>
                <td style="text-align: center;"> {{ $item->calle_direccion }} </td>
                <td style="text-align: center;"> {{ $item->nombre_direccion }} </td>
                <td style="text-align: center;"> {{ $item->numero_direccion }} </td>
                <td style="text-align: center;"> {{ $item->region }} </td>
                <td style="text-align: center;"> {{ $item->pais }} </td>
                <td style="text-align: center;"> {{ link_to('direccions/'.$item->id, 'Ver') }} </td>
                <td style="text-align: center;"> {{ link_to('direccions/'.$item->id.'/edit', 'Editar') }} </td>
                <td style="text-align: center;"> 
                    {{ Form::open(array('url' => 'direccions/'.$item->id)) }}
                        {{ Form::hidden("_method", "DELETE") }}
                       {{ Form::submit("Eliminar") }}
                   {{ Form::close() }}
                </td>
             </tr>
          @endforeach
          </tbody>
       </table>
    @else
       <p> No se han encontrado direccions </p>
    @endif
 </body>
</html>
@endsection