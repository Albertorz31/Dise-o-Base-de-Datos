@extends('administradors/layoutadmin')
@section('contenido') 
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title> Facultades </title>
</head>
<body>
	<h1> Facultades </h1>
	@if(Session::has('notice'))
	   <p> <strong> {{ Session::get('notice')}}</strong></p>
	@endif
	<p> {{ link_to ('facultads/create', 'Crear nueva Facultad') }} </p>
	@if($facultads->count())
	   <table class="table"> 
	   	  <thead class="thead-dark">
	   	  <tr>
	   	  	<th style="text-align: center;" scope="col"> Nombre de Facultad </th>
	   	  	<th style="text-align: center;" scope="col"> Número de carreras </th>
	   	  	<th style="text-align: center;" scope="col"> Número de estudiantes </th>
	   	  	<th style="text-align: center;" scope="col"> </th>
	   	  	<th style="text-align: center;" scope="col"> </th>
	   	  	<th style="text-align: center;" scope="col"> </th>
	   	  </tr>
	   	  </thead>
	   	  <tbody>
	   	  @foreach($facultads as $item)
	   	    <tr>
	   	       <td style="text-align: center;"> {{$item->nombre_facultad}} </td>
	   	       <td style="text-align: center;"> {{$item->numero_carreras}} </td>
	   	       <td style="text-align: center;"> {{$item->numero_estudiantes}} </td>
	   	       <td style="text-align: center;"> {{ link_to('facultads/'.$item->id, 'Ver')}}</td>
	   	       <td style="text-align: center;"> {{ link_to('facultads/'.$item->id.'/edit', 'Editar')}} </td>
	   	       <td style="text-align: center;">
	   	            {{ Form::open(array('url' => 'facultads/'.$item->id)) }}
                        {{ Form::hidden("_method", "DELETE") }}
                       {{ Form::submit("Eliminar") }}
                    {{ Form::close() }}  
                </td>
            </tr>
          @endforeach 
	   	  </tbody>
	   </table>
	@else
	   <p> No se ha encontrado ninguna Facultad </p>
	@endif
</body>
</html>
@endsection