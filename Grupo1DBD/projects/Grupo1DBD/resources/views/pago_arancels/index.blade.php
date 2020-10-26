@extends('layout')
@section('contenido') 
<!DOCTYPE html>
<html>
 <head>
 	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title> Pago_Arancel </title>
 </head>
 <body>
    <h1> Pago_Arancel </h1>
    @if(Session::has('notice'))
       <p> <strong> {{ Session::get('notice') }} </strong> </p>
    @endif
    <p> {{ link_to ('pago_arancels/create', 'Crear nuevo pago_arancel') }} </p>
    @if($pago_arancels->count())
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
          @foreach($pago_arancels as $item)
             <tr>
                <td style="text-align: center;"> {{ $item->fecha}} </td>
                <td style="text-align: center;"> {{ link_to('pago_arancels/'.$item->id, 'Ver') }} </td>
                <td style="text-align: center;"> {{ link_to('pago_arancels/'.$item->id.'/edit', 'Editar') }} </td>
                <td style="text-align: center;"> 
                    {{ Form::open(array('url' => 'pago_arancels/'.$item->id)) }}
                        {{ Form::hidden("_method", "DELETE") }}
                       {{ Form::submit("Eliminar") }}
                   {{ Form::close() }}
                </td>
             </tr>
          @endforeach
          </tbody>
       </table>
    @else
       <p> No se han encontrado pago_arancels </p>
    @endif
 </body>
</html>
@endsection