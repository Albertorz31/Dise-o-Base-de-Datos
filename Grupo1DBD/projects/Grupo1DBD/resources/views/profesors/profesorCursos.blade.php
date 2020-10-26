@extends('profesors/layout')
@section('contenido') 
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title> Secciones </title>
</head>
<body>
	<h1> Secciones </h1>
	@if($cursos->count())
	    <table class="table">
	    	<thead class="thead-dark">
	    	<tr>
	    		<th style="text-align: center;" scope="col"> Nombre de la Asignatura </th>
	    		<th style="text-align: center;" scope="col"> Tipo de Seccion </th>
	    		<th style="width: 50px; border-bottom: solid 1px #000;" scope="col"> </th>
	    	</tr>
	    	</thead>
	    	<tbody>
	    	@foreach($cursos as $item)
	    	    <tr>
	    	    	<td style="text-align: center;"> {{ $item->nombre_asignatura}} </td>
	    	    	<td style="text-align: center;"> {{ $item->tipo_seccion}} </td>
	    	    	<td style="text-align: center;"><a href="{{url('profesors/profesorAlumnos/' .$item->id_profesor)}}" class="btn btn-info"> Alumnos </a></td>
	    	    </tr>
	    	@endforeach
	    	</tbody>
	    </table>
    @else
        <p> No se han encontrado cursos </p>
    @endif
</body>
</html>
@endsection