@extends('profesors/layout')
@section('contenido')
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title> Horarios</title>

	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

	<style>
		.color1{
			background-color: #FFD52F
		}
		.estiloIntra {
		    font-family: Tahoma;
		    font-size: 9pt;
		    font-style: normal;
		    line-height: normal;
		    font-weight: normal;
		    font-variant: normal;
		    text-transform: none;
		    color: #000000;
		}
	</style>
</head>
<body>
	<h1> Horarios </h1>
	    <table class="display" cellspacing="0" cellpadding="0" border="0">
	    	<thead>
	    		<tr>
	    			<th class="descv3"> Horario de Clases</th>
	    		</tr>
	    	</thead>
	    	<tbody>
	    	</tbody>
	    </table>
	    @if($horarios->count())
		    <table class="table">
		    	<thead class="thead-light">
		    		<tr>
		    			<th style="text-align: center;" scope="col">MODULO</th>
		    			<th style="text-align: center;" scope="col">LUNES</th>
		    			<th style="text-align: center;" scope="col">MARTES</th>
		    			<th style="text-align: center;" scope="col">MIERCOLES</th>
		    			<th style="text-align: center;" scope="col">JUEVES</th>
		    			<th style="text-align: center;" scope="col">VIERNES</th>
		    			<th style="text-align: center;" scope="col">SABADO</th>
		    		</tr>	
		    	</thead>
		    	<tbody>
		    	    <tr>
		    	    	<td style="text-align: center;"> 1- 08:00-9:30</td>
		    	    	@php
		    	    	   $variable = 0
		    	    	@endphp
		    	    	@foreach($horarios as $item) 		
		    	    		@if($item->modulo == "8:00-9:30" and $item->dia == "Lunes")
		    	    		    <td class="color1" style="text-align: center;">
		    	    		    	@php
		    	    		    	    $variable = 1
		    	    		    	@endphp
		    	    		    	<span class="estiloIntra">
		    	    		    		{{ $item->nombre_asignatura}}
		    	    		    		<br>
		    	    		    		Sala: {{ $item->sala}}
		    	    		    	</span>
		    	    		    </td>
		    	    		    @break
		    	    		@endif
		    	    	@endforeach
		    	    	@if($variable == 0)
		    	    	   <td style="text-align: center;" bgcolor="EEEEEE"></td>
		    	    	@endif
		    	    	@php
		    	    	   $variable = 0
		    	    	@endphp
		    	    	@foreach($horarios as $item) 		
		    	    		@if($item->modulo == "8:00-9:30" and $item->dia == "Martes")
		    	    		    <td class="color1" style="text-align: center;">
		    	    		    	@php
		    	    		    	    $variable = 1
		    	    		    	@endphp
		    	    		    	<span class="estiloIntra">
		    	    		    		{{ $item->nombre_asignatura}}
		    	    		    		<br>
		    	    		    		Sala: {{ $item->sala}}
		    	    		    	</span>
		    	    		    </td>
		    	    		    @break
		    	    		@endif
		    	    	@endforeach
		    	    	@if($variable == 0)
		    	    	   <td style="text-align: center;" bgcolor="EEEEEE"></td>
		    	    	@endif
		    	    	@php
		    	    	   $variable = 0
		    	    	@endphp
		    	    	@foreach($horarios as $item) 		
		    	    		@if($item->modulo == "8:00-9:30" and $item->dia == "Miercoles")
		    	    		    <td class="color1" style="text-align: center;">
		    	    		    	@php
		    	    		    	    $variable = 1
		    	    		    	@endphp
		    	    		    	<span class="estiloIntra">
		    	    		    		{{ $item->nombre_asignatura}}
		    	    		    		<br>
		    	    		    		Sala: {{ $item->sala}}
		    	    		    	</span>
		    	    		    </td>
		    	    		    @break
		    	    		@endif
		    	    	@endforeach
		    	    	@if($variable == 0)
		    	    	   <td style="text-align: center;" bgcolor="EEEEEE"></td>
		    	    	@endif
		    	    	@php
		    	    	   $variable = 0
		    	    	@endphp
		    	    	@foreach($horarios as $item) 		
		    	    		@if($item->modulo == "8:00-9:30" and $item->dia == "Jueves")
		    	    		    <td class="color1" style="text-align: center;">
		    	    		    	@php
		    	    		    	    $variable = 1
		    	    		    	@endphp
		    	    		    	<span class="estiloIntra">
		    	    		    		{{ $item->nombre_asignatura}}
		    	    		    		<br>
		    	    		    		Sala: {{ $item->sala}}
		    	    		    	</span>
		    	    		    </td>
		    	    		    @break
		    	    		@endif
		    	    	@endforeach
		    	    	@if($variable == 0)
		    	    	   <td style="text-align: center;" bgcolor="EEEEEE"></td>
		    	    	@endif
		    	    	@php
		    	    	   $variable = 0
		    	    	@endphp
		    	    	@foreach($horarios as $item) 		
		    	    		@if($item->modulo == "8:00-9:30" and $item->dia == "Viernes")
		    	    		    <td class="color1" style="text-align: center;">
		    	    		    	@php
		    	    		    	    $variable = 1
		    	    		    	@endphp
		    	    		    	<span class="estiloIntra">
		    	    		    		{{ $item->nombre_asignatura}}
		    	    		    		<br>
		    	    		    		Sala: {{ $item->sala}}
		    	    		    	</span>
		    	    		    </td>
		    	    		    @break
		    	    		@endif
		    	    	@endforeach
		    	    	@if($variable == 0)
		    	    	   <td style="text-align: center;" bgcolor="EEEEEE"></td>
		    	    	@endif
		    	    	@php
		    	    	   $variable = 0
		    	    	@endphp
		    	        @foreach($horarios as $item) 		
		    	    		@if($item->modulo == "8:00-9:30" and $item->dia == "Sabado")
		    	    		    <td class="color1" style="text-align: center;">
		    	    		    	@php
		    	    		    	    $variable = 1
		    	    		    	@endphp
		    	    		    	<span class="estiloIntra">
		    	    		    		{{ $item->nombre_asignatura}}
		    	    		    		<br>
		    	    		    		Sala: {{ $item->sala}}
		    	    		    	</span>
		    	    		    </td>
		    	    		    @break
		    	    		@endif
		    	    	@endforeach
		    	    	@if($variable == 0)
		    	    	   <td style="text-align: center;" bgcolor="EEEEEE"></td>
		    	    	@endif
		    	    </tr>
		    	    <tr>
		    	    	<td style="text-align: center;"> 2- 9:40:11:10</td>
		    	    	@php
		    	    	   $variable = 0
		    	    	@endphp
		    	    	@foreach($horarios as $item) 		
		    	    		@if($item->modulo == "9:40:11:10" and $item->dia == "Lunes")
		    	    		    <td class="color1" style="text-align: center;">
		    	    		    	@php
		    	    		    	    $variable = 1
		    	    		    	@endphp
		    	    		    	<span class="estiloIntra">
		    	    		    		{{ $item->nombre_asignatura}}
		    	    		    		<br>
		    	    		    		Sala: {{ $item->sala}}
		    	    		    	</span>
		    	    		    </td>
		    	    		    @break
		    	    		@endif
		    	    	@endforeach
		    	    	@if($variable == 0)
		    	    	   <td style="text-align: center;" bgcolor="EEEEEE"></td>
		    	    	@endif
		    	    	@php
		    	    	   $variable = 0
		    	    	@endphp
		    	    	@foreach($horarios as $item) 		
		    	    		@if($item->modulo == "9:40:11:10" and $item->dia == "Martes")
		    	    		    <td class="color1" style="text-align: center;">
		    	    		    	@php
		    	    		    	    $variable = 1
		    	    		    	@endphp
		    	    		    	<span class="estiloIntra">
		    	    		    		{{ $item->nombre_asignatura}}
		    	    		    		<br>
		    	    		    		Sala: {{ $item->sala}}
		    	    		    	</span>
		    	    		    </td>
		    	    		    @break
		    	    		@endif
		    	    	@endforeach
		    	    	@if($variable == 0)
		    	    	   <td style="text-align: center;" bgcolor="EEEEEE"></td>
		    	    	@endif
		    	    	@php
		    	    	   $variable = 0
		    	    	@endphp
		    	    	@foreach($horarios as $item) 		
		    	    		@if($item->modulo == "9:40:11:10" and $item->dia == "Miercoles")
		    	    		    <td class="color1" style="text-align: center;">
		    	    		    	@php
		    	    		    	    $variable = 1
		    	    		    	@endphp
		    	    		    	<span class="estiloIntra">
		    	    		    		{{ $item->nombre_asignatura}}
		    	    		    		<br>
		    	    		    		Sala: {{ $item->sala}}
		    	    		    	</span>
		    	    		    </td>
		    	    		    @break
		    	    		@endif
		    	    	@endforeach
		    	    	@if($variable == 0)
		    	    	   <td style="text-align: center;" bgcolor="EEEEEE"></td>
		    	    	@endif
		    	    	@php
		    	    	   $variable = 0
		    	    	@endphp
		    	    	@foreach($horarios as $item) 		
		    	    		@if($item->modulo == "9:40:11:10" and $item->dia == "Jueves")
		    	    		    <td class="color1" style="text-align: center;">
		    	    		    	@php
		    	    		    	    $variable = 1
		    	    		    	@endphp
		    	    		    	<span class="estiloIntra">
		    	    		    		{{ $item->nombre_asignatura}}
		    	    		    		<br>
		    	    		    		Sala: {{ $item->sala}}
		    	    		    	</span>
		    	    		    </td>
		    	    		    @break
		    	    		@endif
		    	    	@endforeach
		    	    	@if($variable == 0)
		    	    	   <td style="text-align: center;" bgcolor="EEEEEE"></td>
		    	    	@endif
		    	    	@php
		    	    	   $variable = 0
		    	    	@endphp
		    	    	@foreach($horarios as $item) 		
		    	    		@if($item->modulo == "9:40:11:10" and $item->dia == "Viernes")
		    	    		    <td class="color1" style="text-align: center;">
		    	    		    	@php
		    	    		    	    $variable = 1
		    	    		    	@endphp
		    	    		    	<span class="estiloIntra">
		    	    		    		{{ $item->nombre_asignatura}}
		    	    		    		<br>
		    	    		    		Sala: {{ $item->sala}}
		    	    		    	</span>
		    	    		    </td>
		    	    		    @break
		    	    		@endif
		    	    	@endforeach
		    	    	@if($variable == 0)
		    	    	   <td style="text-align: center;" bgcolor="EEEEEE"></td>
		    	    	@endif
		    	    	@php
		    	    	   $variable = 0
		    	    	@endphp
		    	        @foreach($horarios as $item) 		
		    	    		@if($item->modulo == "9:40:11:10" and $item->dia == "Sabado")
		    	    		    <td class="color1" style="text-align: center;">
		    	    		    	@php
		    	    		    	    $variable = 1
		    	    		    	@endphp
		    	    		    	<span class="estiloIntra">
		    	    		    		{{ $item->nombre_asignatura}}
		    	    		    		<br>
		    	    		    		Sala: {{ $item->sala}}
		    	    		    	</span>
		    	    		    </td>
		    	    		    @break
		    	    		@endif
		    	    	@endforeach
		    	    	@if($variable == 0)
		    	    	   <td style="text-align: center;" bgcolor="EEEEEE"></td>
		    	    	@endif
		    	    </tr>
		    	    <tr>
		    	    	<td style="text-align: center;"> 3- 11:20:12:50</td>
		    	    	@php
		    	    	   $variable = 0
		    	    	@endphp
		    	    	@foreach($horarios as $item) 		
		    	    		@if($item->modulo == "11:20:12:50" and $item->dia == "Lunes")
		    	    		    <td class="color1" style="text-align: center;">
		    	    		    	@php
		    	    		    	    $variable = 1
		    	    		    	@endphp
		    	    		    	<span class="estiloIntra">
		    	    		    		{{ $item->nombre_asignatura}}
		    	    		    		<br>
		    	    		    		Sala: {{ $item->sala}}
		    	    		    	</span>
		    	    		    </td>
		    	    		    @break
		    	    		@endif
		    	    	@endforeach
		    	    	@if($variable == 0)
		    	    	   <td style="text-align: center;" bgcolor="EEEEEE"></td>
		    	    	@endif
		    	    	@php
		    	    	   $variable = 0
		    	    	@endphp
		    	    	@foreach($horarios as $item) 		
		    	    		@if($item->modulo == "11:20:12:50" and $item->dia == "Martes")
		    	    		    <td class="color1" style="text-align: center;">
		    	    		    	@php
		    	    		    	    $variable = 1
		    	    		    	@endphp
		    	    		    	<span class="estiloIntra">
		    	    		    		{{ $item->nombre_asignatura}}
		    	    		    		<br>
		    	    		    		Sala: {{ $item->sala}}
		    	    		    	</span>
		    	    		    </td>
		    	    		    @break
		    	    		@endif
		    	    	@endforeach
		    	    	@if($variable == 0)
		    	    	   <td style="text-align: center;" bgcolor="EEEEEE"></td>
		    	    	@endif
		    	    	@php
		    	    	   $variable = 0
		    	    	@endphp
		    	    	@foreach($horarios as $item) 		
		    	    		@if($item->modulo == "11:20:12:50" and $item->dia == "Miercoles")
		    	    		    <td class="color1" style="text-align: center;">
		    	    		    	@php
		    	    		    	    $variable = 1
		    	    		    	@endphp
		    	    		    	<span class="estiloIntra">
		    	    		    		{{ $item->nombre_asignatura}}
		    	    		    		<br>
		    	    		    		Sala: {{ $item->sala}}
		    	    		    	</span>
		    	    		    </td>
		    	    		    @break
		    	    		@endif
		    	    	@endforeach
		    	    	@if($variable == 0)
		    	    	   <td style="text-align: center;" bgcolor="EEEEEE"></td>
		    	    	@endif
		    	    	@php
		    	    	   $variable = 0
		    	    	@endphp
		    	    	@foreach($horarios as $item) 		
		    	    		@if($item->modulo == "11:20:12:50" and $item->dia == "Jueves")
		    	    		    <td class="color1" style="text-align: center;">
		    	    		    	@php
		    	    		    	    $variable = 1
		    	    		    	@endphp
		    	    		    	<span class="estiloIntra">
		    	    		    		{{ $item->nombre_asignatura}}
		    	    		    		<br>
		    	    		    		Sala: {{ $item->sala}}
		    	    		    	</span>
		    	    		    </td>
		    	    		    @break
		    	    		@endif
		    	    	@endforeach
		    	    	@if($variable == 0)
		    	    	   <td style="text-align: center;" bgcolor="EEEEEE"></td>
		    	    	@endif
		    	    	@php
		    	    	   $variable = 0
		    	    	@endphp
		    	    	@foreach($horarios as $item) 		
		    	    		@if($item->modulo == "11:20:12:50" and $item->dia == "Viernes")
		    	    		    <td class="color1" style="text-align: center;">
		    	    		    	@php
		    	    		    	    $variable = 1
		    	    		    	@endphp
		    	    		    	<span class="estiloIntra">
		    	    		    		{{ $item->nombre_asignatura}}
		    	    		    		<br>
		    	    		    		Sala: {{ $item->sala}}
		    	    		    	</span>
		    	    		    </td>
		    	    		    @break
		    	    		@endif
		    	    	@endforeach
		    	    	@if($variable == 0)
		    	    	   <td style="text-align: center;" bgcolor="EEEEEE"></td>
		    	    	@endif
		    	    	@php
		    	    	   $variable = 0
		    	    	@endphp
		    	        @foreach($horarios as $item) 		
		    	    		@if($item->modulo == "11:20:12:50" and $item->dia == "Sabado")
		    	    		    <td class="color1" style="text-align: center;">
		    	    		    	@php
		    	    		    	    $variable = 1
		    	    		    	@endphp
		    	    		    	<span class="estiloIntra">
		    	    		    		{{ $item->nombre_asignatura}}
		    	    		    		<br>
		    	    		    		Sala: {{ $item->sala}}
		    	    		    	</span>
		    	    		    </td>
		    	    		    @break
		    	    		@endif
		    	    	@endforeach
		    	    	@if($variable == 0)
		    	    	   <td style="text-align: center;" bgcolor="EEEEEE"></td>
		    	    	@endif
		    	    </tr>
		    	    <tr>
		    	    	<td style="text-align: center;"> 4- 13:50-15:20</td>
		    	    	@php
		    	    	   $variable = 0
		    	    	@endphp
		    	    	@foreach($horarios as $item) 		
		    	    		@if($item->modulo == "13:50-15:20" and $item->dia == "Lunes")
		    	    		    <td class="color1" style="text-align: center;">
		    	    		    	@php
		    	    		    	    $variable = 1
		    	    		    	@endphp
		    	    		    	<span class="estiloIntra">
		    	    		    		{{ $item->nombre_asignatura}}
		    	    		    		<br>
		    	    		    		Sala: {{ $item->sala}}
		    	    		    	</span>
		    	    		    </td>
		    	    		    @break
		    	    		@endif
		    	    	@endforeach
		    	    	@if($variable == 0)
		    	    	   <td style="text-align: center;" bgcolor="EEEEEE"></td>
		    	    	@endif
		    	    	@php
		    	    	   $variable = 0
		    	    	@endphp
		    	    	@foreach($horarios as $item) 		
		    	    		@if($item->modulo == "13:50-15:20" and $item->dia == "Martes")
		    	    		    <td class="color1" style="text-align: center;">
		    	    		    	@php
		    	    		    	    $variable = 1
		    	    		    	@endphp
		    	    		    	<span class="estiloIntra">
		    	    		    		{{ $item->nombre_asignatura}}
		    	    		    		<br>
		    	    		    		Sala: {{ $item->sala}}
		    	    		    	</span>
		    	    		    </td>
		    	    		    @break
		    	    		@endif
		    	    	@endforeach
		    	    	@if($variable == 0)
		    	    	   <td style="text-align: center;" bgcolor="EEEEEE"></td>
		    	    	@endif
		    	    	@php
		    	    	   $variable = 0
		    	    	@endphp
		    	    	@foreach($horarios as $item) 		
		    	    		@if($item->modulo == "13:50-15:20" and $item->dia == "Miercoles")
		    	    		    <td class="color1" style="text-align: center;">
		    	    		    	@php
		    	    		    	    $variable = 1
		    	    		    	@endphp
		    	    		    	<span class="estiloIntra">
		    	    		    		{{ $item->nombre_asignatura}}
		    	    		    		<br>
		    	    		    		Sala: {{ $item->sala}}
		    	    		    	</span>
		    	    		    </td>
		    	    		    @break
		    	    		@endif
		    	    	@endforeach
		    	    	@if($variable == 0)
		    	    	   <td style="text-align: center;" bgcolor="EEEEEE"></td>
		    	    	@endif
		    	    	@php
		    	    	   $variable = 0
		    	    	@endphp
		    	    	@foreach($horarios as $item) 		
		    	    		@if($item->modulo == "13:50-15:20" and $item->dia == "Jueves")
		    	    		    <td class="color1" style="text-align: center;">
		    	    		    	@php
		    	    		    	    $variable = 1
		    	    		    	@endphp
		    	    		    	<span class="estiloIntra">
		    	    		    		{{ $item->nombre_asignatura}}
		    	    		    		<br>
		    	    		    		Sala: {{ $item->sala}}
		    	    		    	</span>
		    	    		    </td>
		    	    		    @break
		    	    		@endif
		    	    	@endforeach
		    	    	@if($variable == 0)
		    	    	   <td style="text-align: center;" bgcolor="EEEEEE"></td>
		    	    	@endif
		    	    	@php
		    	    	   $variable = 0
		    	    	@endphp
		    	    	@foreach($horarios as $item) 		
		    	    		@if($item->modulo == "13:50-15:20" and $item->dia == "Viernes")
		    	    		    <td class="color1" style="text-align: center;">
		    	    		    	@php
		    	    		    	    $variable = 1
		    	    		    	@endphp
		    	    		    	<span class="estiloIntra">
		    	    		    		{{ $item->nombre_asignatura}}
		    	    		    		<br>
		    	    		    		Sala: {{ $item->sala}}
		    	    		    	</span>
		    	    		    </td>
		    	    		    @break
		    	    		@endif
		    	    	@endforeach
		    	    	@if($variable == 0)
		    	    	   <td style="text-align: center;" bgcolor="EEEEEE"></td>
		    	    	@endif
		    	    	@php
		    	    	   $variable = 0
		    	    	@endphp
		    	        @foreach($horarios as $item) 		
		    	    		@if($item->modulo == "13:50-15:20" and $item->dia == "Sabado")
		    	    		    <td class="color1" style="text-align: center;">
		    	    		    	@php
		    	    		    	    $variable = 1
		    	    		    	@endphp
		    	    		    	<span class="estiloIntra">
		    	    		    		{{ $item->nombre_asignatura}}
		    	    		    		<br>
		    	    		    		Sala: {{ $item->sala}}
		    	    		    	</span>
		    	    		    </td>
		    	    		    @break
		    	    		@endif
		    	    	@endforeach
		    	    	@if($variable == 0)
		    	    	   <td style="text-align: center;" bgcolor="EEEEEE"></td>
		    	    	@endif
		    	    </tr>
		    	    <tr>
		    	    	<td style="text-align: center;"> 5- 15:30-17:00 </td>
		    	    	@php
		    	    	   $variable = 0
		    	    	@endphp
		    	    	@foreach($horarios as $item) 		
		    	    		@if($item->modulo == "15:30-17:00" and $item->dia == "Lunes")
		    	    		    <td class="color1" style="text-align: center;">
		    	    		    	@php
		    	    		    	    $variable = 1
		    	    		    	@endphp
		    	    		    	<span class="estiloIntra">
		    	    		    		{{ $item->nombre_asignatura}}
		    	    		    		<br>
		    	    		    		Sala: {{ $item->sala}}
		    	    		    	</span>
		    	    		    </td>
		    	    		    @break
		    	    		@endif
		    	    	@endforeach
		    	    	@if($variable == 0)
		    	    	   <td style="text-align: center;" bgcolor="EEEEEE"></td>
		    	    	@endif
		    	    	@php
		    	    	   $variable = 0
		    	    	@endphp
		    	    	@foreach($horarios as $item) 		
		    	    		@if($item->modulo == "15:30-17:00" and $item->dia == "Martes")
		    	    		    <td class="color1" style="text-align: center;">
		    	    		    	@php
		    	    		    	    $variable = 1
		    	    		    	@endphp
		    	    		    	<span class="estiloIntra">
		    	    		    		{{ $item->nombre_asignatura}}
		    	    		    		<br>
		    	    		    		Sala: {{ $item->sala}}
		    	    		    	</span>
		    	    		    </td>
		    	    		    @break
		    	    		@endif
		    	    	@endforeach
		    	    	@if($variable == 0)
		    	    	   <td style="text-align: center;" bgcolor="EEEEEE"></td>
		    	    	@endif
		    	    	@php
		    	    	   $variable = 0
		    	    	@endphp
		    	    	@foreach($horarios as $item) 		
		    	    		@if($item->modulo == "15:30-17:00" and $item->dia == "Miercoles")
		    	    		    <td class="color1" style="text-align: center;">
		    	    		    	@php
		    	    		    	    $variable = 1
		    	    		    	@endphp
		    	    		    	<span class="estiloIntra">
		    	    		    		{{ $item->nombre_asignatura}}
		    	    		    		<br>
		    	    		    		Sala: {{ $item->sala}}
		    	    		    	</span>
		    	    		    </td>
		    	    		    @break
		    	    		@endif
		    	    	@endforeach
		    	    	@if($variable == 0)
		    	    	   <td style="text-align: center;" bgcolor="EEEEEE"></td>
		    	    	@endif
		    	    	@php
		    	    	   $variable = 0
		    	    	@endphp
		    	    	@foreach($horarios as $item) 		
		    	    		@if($item->modulo == "15:30-17:00" and $item->dia == "Jueves")
		    	    		    <td class="color1" style="text-align: center;">
		    	    		    	@php
		    	    		    	    $variable = 1
		    	    		    	@endphp
		    	    		    	<span class="estiloIntra">
		    	    		    		{{ $item->nombre_asignatura}}
		    	    		    		<br>
		    	    		    		Sala: {{ $item->sala}}
		    	    		    	</span>
		    	    		    </td>
		    	    		    @break
		    	    		@endif
		    	    	@endforeach
		    	    	@if($variable == 0)
		    	    	   <td style="text-align: center;" bgcolor="EEEEEE"></td>
		    	    	@endif
		    	    	@php
		    	    	   $variable = 0
		    	    	@endphp
		    	    	@foreach($horarios as $item) 		
		    	    		@if($item->modulo == "15:30-17:00" and $item->dia == "Viernes")
		    	    		    <td class="color1" style="text-align: center;">
		    	    		    	@php
		    	    		    	    $variable = 1
		    	    		    	@endphp
		    	    		    	<span class="estiloIntra">
		    	    		    		{{ $item->nombre_asignatura}}
		    	    		    		<br>
		    	    		    		Sala: {{ $item->sala}}
		    	    		    	</span>
		    	    		    </td>
		    	    		    @break
		    	    		@endif
		    	    	@endforeach
		    	    	@if($variable == 0)
		    	    	   <td style="text-align: center;" bgcolor="EEEEEE"></td>
		    	    	@endif
		    	    	@php
		    	    	   $variable = 0
		    	    	@endphp
		    	        @foreach($horarios as $item) 		
		    	    		@if($item->modulo == "15:30-17:00" and $item->dia == "Sabado")
		    	    		    <td class="color1" style="text-align: center;">
		    	    		    	@php
		    	    		    	    $variable = 1
		    	    		    	@endphp
		    	    		    	<span class="estiloIntra">
		    	    		    		{{ $item->nombre_asignatura}}
		    	    		    		<br>
		    	    		    		Sala: {{ $item->sala}}
		    	    		    	</span>
		    	    		    </td>
		    	    		    @break
		    	    		@endif
		    	    	@endforeach
		    	    	@if($variable == 0)
		    	    	   <td style="text-align: center;" bgcolor="EEEEEE"></td>
		    	    	@endif
		    	    </tr>
		    	    <tr>
		    	    	<td style="text-align: center;"> 6- 17:10-18:40</td>
		    	    	@php
		    	    	   $variable = 0
		    	    	@endphp
		    	    	@foreach($horarios as $item) 		
		    	    		@if($item->modulo == "17:10-18:40" and $item->dia == "Lunes")
		    	    		    <td class="color1" style="text-align: center;">
		    	    		    	@php
		    	    		    	    $variable = 1
		    	    		    	@endphp
		    	    		    	<span class="estiloIntra">
		    	    		    		{{ $item->nombre_asignatura}}
		    	    		    		<br>
		    	    		    		Sala: {{ $item->sala}}
		    	    		    	</span>
		    	    		    </td>
		    	    		    @break
		    	    		@endif
		    	    	@endforeach
		    	    	@if($variable == 0)
		    	    	   <td style="text-align: center;" bgcolor="EEEEEE"></td>
		    	    	@endif
		    	    	@php
		    	    	   $variable = 0
		    	    	@endphp
		    	    	@foreach($horarios as $item) 		
		    	    		@if($item->modulo == "17:10-18:40" and $item->dia == "Martes")
		    	    		    <td class="color1" style="text-align: center;">
		    	    		    	@php
		    	    		    	    $variable = 1
		    	    		    	@endphp
		    	    		    	<span class="estiloIntra">
		    	    		    		{{ $item->nombre_asignatura}}
		    	    		    		<br>
		    	    		    		Sala: {{ $item->sala}}
		    	    		    	</span>
		    	    		    </td>
		    	    		    @break
		    	    		@endif
		    	    	@endforeach
		    	    	@if($variable == 0)
		    	    	   <td style="text-align: center;" bgcolor="EEEEEE"></td>
		    	    	@endif
		    	    	@php
		    	    	   $variable = 0
		    	    	@endphp
		    	    	@foreach($horarios as $item) 		
		    	    		@if($item->modulo == "17:10-18:40" and $item->dia == "Miercoles")
		    	    		    <td class="color1" style="text-align: center;">
		    	    		    	@php
		    	    		    	    $variable = 1
		    	    		    	@endphp
		    	    		    	<span class="estiloIntra">
		    	    		    		{{ $item->nombre_asignatura}}
		    	    		    		<br>
		    	    		    		Sala: {{ $item->sala}}
		    	    		    	</span>
		    	    		    </td>
		    	    		    @break
		    	    		@endif
		    	    	@endforeach
		    	    	@if($variable == 0)
		    	    	   <td style="text-align: center;" bgcolor="EEEEEE"></td>
		    	    	@endif
		    	    	@php
		    	    	   $variable = 0
		    	    	@endphp
		    	    	@foreach($horarios as $item) 		
		    	    		@if($item->modulo == "17:10-18:40" and $item->dia == "Jueves")
		    	    		    <td class="color1" style="text-align: center;">
		    	    		    	@php
		    	    		    	    $variable = 1
		    	    		    	@endphp
		    	    		    	<span class="estiloIntra">
		    	    		    		{{ $item->nombre_asignatura}}
		    	    		    		<br>
		    	    		    		Sala: {{ $item->sala}}
		    	    		    	</span>
		    	    		    </td>
		    	    		    @break
		    	    		@endif
		    	    	@endforeach
		    	    	@if($variable == 0)
		    	    	   <td style="text-align: center;" bgcolor="EEEEEE"></td>
		    	    	@endif
		    	    	@php
		    	    	   $variable = 0
		    	    	@endphp
		    	    	@foreach($horarios as $item) 		
		    	    		@if($item->modulo == "17:10-18:40" and $item->dia == "Viernes")
		    	    		    <td class="color1" style="text-align: center;">
		    	    		    	@php
		    	    		    	    $variable = 1
		    	    		    	@endphp
		    	    		    	<span class="estiloIntra">
		    	    		    		{{ $item->nombre_asignatura}}
		    	    		    		<br>
		    	    		    		Sala: {{ $item->sala}}
		    	    		    	</span>
		    	    		    </td>
		    	    		    @break
		    	    		@endif
		    	    	@endforeach
		    	    	@if($variable == 0)
		    	    	   <td style="text-align: center;" bgcolor="EEEEEE"></td>
		    	    	@endif
		    	    	@php
		    	    	   $variable = 0
		    	    	@endphp
		    	        @foreach($horarios as $item) 		
		    	    		@if($item->modulo == "17:10-18:40" and $item->dia == "Sabado")
		    	    		    <td class="color1" style="text-align: center;">
		    	    		    	@php
		    	    		    	    $variable = 1
		    	    		    	@endphp
		    	    		    	<span class="estiloIntra">
		    	    		    		{{ $item->nombre_asignatura}}
		    	    		    		<br>
		    	    		    		Sala: {{ $item->sala}}
		    	    		    	</span>
		    	    		    </td>
		    	    		    @break
		    	    		@endif
		    	    	@endforeach
		    	    	@if($variable == 0)
		    	    	   <td style="text-align: center;" bgcolor="EEEEEE"></td>
		    	    	@endif
		    	    </tr>
		    	</tbody> 	
		    </table>
		@else
		    <p> No se ha encontrado asignaturas</p>
		@endif
</body>
</html>
@endsection
