@extends('profesors/layout')
@section('contenido') 
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title> Alumnos </title>
</head>
<body>
	<h1> Estudiantes </h1>
	@if($alumnos->count())
	    <table class="table">
	    	<thead class="thead-dark">
	    	<tr>
	    		<th style="text-align: center;" scope="col"> Nombre </th>
	    		<th style="text-align: center;" scope="col"> Correo </th>
	    		<th style="text-align: center;" scope="col"> Carrera </th>
	    		<th style="text-align: center;" scope="col"> </th>
	    	</tr>
	    	</thead>
	    	<tbody>
	    	@foreach($alumnos as $item)
	    	    <tr>
	    	    	<td style="text-align: center;"> {{ $item->nombre_estudiante }} </td>
	    	    	<td style="text-align: center;"> {{ $item->email }} </td>
	    	    	<td style="text-align: center;"> {{ $item->nombre_carrera }} </td>
	    	    	<td style="text-align: center;"><a href="{{url('profesors/profesorNotas/' .$item->id_profesor)}}" class="btn btn-info"> Insertar Notas </a></td>
	    	    </tr>
	    	@endforeach
	    	</tbody>
	    </table>
	@else
	    <p> No se han encontrado Estudiantes</p>
	@endif
</body>
</html>
@endsection