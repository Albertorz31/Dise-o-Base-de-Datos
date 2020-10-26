<!DOCTYPE html>
<html>
 <head>
 	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title> Datos del Horario </title>
</head>
<body>
	<h1> {{ $horario->id}} </h1>
	<ul>
		<li> Días: {{ $horario->dia}} </li>
		<li> Módulos: {{ $horario->modulo}} </li>
	</ul>

	<a href="{{ url ('horarios') }}">Volver atras</a>

</body>
</html>