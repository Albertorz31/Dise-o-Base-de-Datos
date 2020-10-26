@extends('layout')
@inject('controller','App\Http\Controllers\EstudianteController')
@section('contenido')

<!DOCTYPE html>
<html>
 <head>
 	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title> Horarios </title>
 </head>
 <body>
    <h1> Horarios </h1>
		@if($controller::mostrarMalla(Auth::user())->count())
       <table style="border: solid 1px #000;">
          <thead>
          <tr>
             <th style="text-align: center; width: 100px; border-bottom: solid 1px #000;"> Nombre Asignatura </th>
             <th style="text-align: center; width: 100px; border-bottom: solid 1px #000;"> Nivel </th>
          </tr>
          </thead>
          <tbody>
 			@foreach($controller::mostrarMalla(Auth::user()) as $item)
             <tr>
                <td style="text-align: center;"> {{ $item->nombre_asignatura}} </td>
                <td style="text-align: center;"> {{ $item->nivel_asignatura}} </td>
             </tr>
             @endforeach
             
          </tbody>
       </table>
 @endif      
 </body>
</html>
@endsection