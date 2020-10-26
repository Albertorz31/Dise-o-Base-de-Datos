@extends('layout')
@extends('main')
@section('contenido') 
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<title> Calificaciones</title>
</head>
<body>
	<h1> Mis Calificaciones</h1>
	@php
	   $variable = 1
	@endphp
	@if($calificaciones->count())
	    <table class="table">
	    	<thead class="thead-dark">
	    		<tr>
	    			<th style="text-align: center;" scope="col"> Numero </th>
	    			<th style="text-align: center;" scope="col"> Nombre de la Asignatura</th>
	    			<th style="text-align: center;" scope="col"> Nivel Asignatura </th>
	    			<th style="text-align: center;" scope="col"> Profesor </th>
	    			<th style="text-align: center;" scope="col"> Semestre </th>
	    			<th style="text-align: center;" scope="col"> Nota Catedra </th>
	    			<th style="text-align: center;" scope="col"> Nota Laboratorio </th>
	    			<th style="text-align: center;" scope="col"> Nota Final </th>
	    			<th style="text-align: center;" scope="col"> Situacion </th>
	    		</tr>
	    	</thead>
	    	<tbody>
	    	@foreach($calificaciones as $item)
	    	    @if($item->aprobado == 1)
		    	    <tr>
		    	    	<td style="text-align: center;"> {{ $variable }}</td>
		    	    	<td style="text-align: center;"> {{ $item->nombre_asignatura }}</td>
		    	    	<td style="text-align: center;"> {{ $item->nivel_asignatura }}</td>
		    	    	<td style="text-align: center;"> {{ $item->nombre_profesor }}</td>
		    	        <td style="text-align: center;"> {{ $item->semestre }}</td>
		    	        <td style="text-align: center;"> {{ $item->calificacion_catedra }}</td>
		    	        <td style="text-align: center;"> {{ $item->calificacion_laboratorio}}</td>
		    	        <td style="text-align: center;"> {{ $item->calificacion_final}}</td>
		    	        <td style="text-align: center;"> Aprobado </td>
		    	    </tr>
		    	@else
		    	    <tr class="danger">
		    	    	<td style="text-align: center;"> {{ $variable }}</td>
		    	    	<td style="text-align: center;"> {{ $item->nombre_asignatura }}</td>
		    	    	<td style="text-align: center;"> {{ $item->nivel_asignatura }}</td>
		    	    	<td style="text-align: center;"> {{ $item->nombre_profesor }}</td>
		    	        <td style="text-align: center;"> {{ $item->semestre }}</td>
		    	        <td style="text-align: center;"> {{ $item->calificacion_catedra }}</td>
		    	        <td style="text-align: center;"> {{ $item->calificacion_laboratorio}}</td>
		    	        <td style="text-align: center;"> {{ $item->calificacion_final}}</td>
		    	        <td style="text-align: center;"> Reprobado </td>
		    	    </tr>
		    	@endif
		    	@php
				   $variable = $variable + 1
				@endphp
		    @endforeach
	    	</tbody>
	    </table>
    @else
       <p> No se han encontrado calificaciones </p>
    @endif
</body>
</html>
@endsection