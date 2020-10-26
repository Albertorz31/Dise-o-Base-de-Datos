@extends('profesors/layout')
@section('contenido')

<!DOCTYPE html>
<html>
 <head>
 	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title> Recibidos </title>
 </head>
 <body>
    <h1> Mensajes Recibidos </h1>
		@if($mensajes->count())
       <table style="border: solid 1px #000;">
          <thead>
          <tr>
             <th style="text-align: center; width: 100px; border-bottom: solid 1px #000;"> Mensaje </th>
             <th style="text-align: center; width: 100px; border-bottom: solid 1px #000;"> Fecha </th>
          </tr>
          </thead>
          <tbody>
 			@foreach($mensajes as $item)
             <tr>
                <td style="text-align: center;"> {{ $item->texto}} </td>
                <td style="text-align: center;"> {{ $item->fecha_envio}} </td>
             </tr>
             @endforeach
             
          </tbody>
       </table>
 @endif      
 </body>
</html>
@endsection