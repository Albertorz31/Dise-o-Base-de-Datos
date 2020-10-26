@extends('administradors/layoutadmin')
@section('contenido') 
<!DOCTYPE html>
<html>
 <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title> Utilidades </title>
 </head>
 <body>
    <h1> Utilidades </h1>
    @if(Session::has('notice'))
       <p> <strong> {{ Session::get('notice') }} </strong> </p>
    @endif
    <p> {{ link_to ('utilidads/create', 'Crear nueva utilidad') }} </p>
    @if($utilidads->count())
       <table class="table">
          <thead class="thead-dark">
          <tr>
             <th style="text-align: center;" scope="col"> Documentos disponibles </th>
             <th style="text-align: center;" scope="col"> Certificados disponibles </th>
             <th style="text-align: center;" scope="col"> Solicitudes enviadas </th>
             <th style="text-align: center;" scope="col"> </th>
             <th style="text-align: center;" scope="col"> </th>
             <th style="text-align: center;" scope="col"> </th>
          </tr>
          </thead>
          <tbody>
          @foreach($utilidads as $item)
             <tr>
                <td style="text-align: center;"> {{ $item->documentos_disponibles }} </td>
                <td style="text-align: center;"> {{ $item->certificados_disponibles }} </td>
                <td style="text-align: center;"> {{ $item->solicitudes_enviadas }} </td>
                <td style="text-align: center;"> {{ link_to('utilidads/'.$item->id, 'Ver') }} </td>
                <td style="text-align: center;"> {{ link_to('utilidads/'.$item->id.'/edit', 'Editar') }} </td>
                <td style="text-align: center;">
                    {{ Form::open(array('url' => 'utilidads/'.$item->id)) }}
                        {{ Form::hidden("_method", "DELETE") }}
                       {{ Form::submit("Eliminar") }}
                   {{ Form::close() }}
                </td>
             </tr>
          @endforeach
          </tbody>
       </table>
    @else
       <p> No se han encontrado utilidad </p>
    @endif
 </body>
</html>
@endsection