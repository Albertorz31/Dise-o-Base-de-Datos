<!DOCTYPE html>
<html>
 <head>
 	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title> Datos de la Facultad</title>
</head>
<body>
	<h1> {{ $facultad->id}} </h1>
	<ul>
		<li> Nombre de la Facultad: {{ $facultad->nombre_facultad }} </li>
		<li> Número de carreras: {{ $facultad->numero_carreras }} </li>
		<li> Número de estudiantes: {{ $facultad->numero_estudiantes}} </li>
	</ul>

	<a href="{{ url ('facultads') }}">Volver atras</a>

</body>
</html>