@extends('layout')
@section('contenido') 
<!DOCTYPE html>
<html>
 <head>
 	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title> Pago Matricula </title>
 </head>
 <body>
    <h1> Pago Matricula </h1>
    @if(Session::has('notice'))
       <p> <strong> {{ Session::get('notice') }} </strong> </p>
    @endif
    <p> {{ link_to ('pago_matriculas/create', 'Crear nuevo pago_matricula') }} </p>
    @if($pago_matriculas->count())
       <table style="border: solid 1px #000;">
          <thead>
          <tr>
             <th style="width: 200px; border-bottom: solid 1px #000;"> fecha </th>
             <th style="width: 50px; border-bottom: solid 1px #000;"> </th>
             <th style="width: 50px; border-bottom: solid 1px #000;"> </th>
             <th style="width: 50px; border-bottom: solid 1px #000;"> </th>
          </tr>
          </thead>
          <tbody>
          @foreach($pago_matriculas as $item)
             <tr>
                <td style="text-align: center;"> {{ $item->fecha}} </td>
                <td style="text-align: center;"> {{ link_to('pago_matriculas/'.$item->id, 'Ver') }} </td>
                <td style="text-align: center;"> {{ link_to('pago_matriculas/'.$item->id.'/edit', 'Editar') }} </td>
                <td style="text-align: center;"> 
                    {{ Form::open(array('url' => 'pago_matriculas/'.$item->id)) }}
                        {{ Form::hidden("_method", "DELETE") }}
                       {{ Form::submit("Eliminar") }}
                   {{ Form::close() }}
                </td>
             </tr>
          @endforeach
          </tbody>
       </table>
    @else
       <p> No se han encontrado pago_matriculas </p>
    @endif
 </body>
</html>
@endsection