<!DOCTYPE html>
<html>
 <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title> Datos del administrador_estudiante </title>
 </head>
 <body>
    <h1> {{ $administrador_estudiante->id }} </h1>
    <ul>
       <li> ID Administrador: {{ $administrador_estudiante->id_administrador }} </li>
       <li> ID Estudiante: {{ $administrador_estudiante->id_estudiante }} </li>
    </ul>

    <a href="{{ url ('administrador_estudiantes') }}">Volver atras</a>
 </body>
</html>
