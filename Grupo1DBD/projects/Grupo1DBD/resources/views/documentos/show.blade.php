<!DOCTYPE html>
<html>
 <head>
 	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title> Datos del Documento </title>
</head>
<body>
	<h1> {{ $documento->id}} </h1>
	<ul>
		<li> Nombre del Documento: {{ $documento->nombre_documento }} </li>
		<li> Contenido: {{ $documento->contenido }} </li>
		<li> Fecha: {{ $documento->fecha}} </li>
		<li> ID sección: {{ $documento->id_seccion }} </li>
	</ul>

	<a href="{{ url ('documentos') }}">Volver atras</a>

</body>
</html>