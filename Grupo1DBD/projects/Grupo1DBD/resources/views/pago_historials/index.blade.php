@extends('layout')
@section('contenido') 
<!DOCTYPE html>
<html>
 <head>
 	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title> Pago_historial </title>
 </head>
 <body>
    <h1> Pago Historial </h1>
    @if(Session::has('notice'))
       <p> <strong> {{ Session::get('notice') }} </strong> </p>
    @endif
    <p> {{ link_to ('pago_historials/create', 'Crear nuevo pago historial') }} </p>
    @if($pago_historials->count())
       <table style="border: solid 1px #000;">
          <thead>
          <tr>
             <th style="width: 100px; border-bottom: solid 1px #000;"> ID </th>
             <th style="width: 200px; border-bottom: solid 1px #000;"> ID Pago</th>
             <th style="width: 200px; border-bottom: solid 1px #000;"> ID Historial </th>
             <th style="width: 50px; border-bottom: solid 1px #000;"> </th>
             <th style="width: 50px; border-bottom: solid 1px #000;"> </th>
             <th style="width: 50px; border-bottom: solid 1px #000;"> </th>
          </tr>
          </thead>
          <tbody>
          @foreach($pago_historials as $item)
             <tr>
                <td style="text-align: center;"> {{ $item->id }} </td>
                <td style="text-align: center;"> {{ $item->id_pago }} </td>
                <td style="text-align: center;"> {{ $item->id_historial}} </td>
                <td style="text-align: center;"> {{ link_to('pago_historials/'.$item->id, 'Ver') }} </td>
                <td style="text-align: center;"> {{ link_to('pago_historials/'.$item->id.'/edit', 'Editar') }} </td>
                <td style="text-align: center;"> 
                    {{ Form::open(array('url' => 'pago_historials/'.$item->id)) }}
                        {{ Form::hidden("_method", "DELETE") }}
                       {{ Form::submit("Eliminar") }}
                   {{ Form::close() }}
                </td>
             </tr>
          @endforeach
          </tbody>
       </table>
    @else
       <p> No se han encontrado pago_historials </p>
    @endif
 </body>
</html>
@endsection