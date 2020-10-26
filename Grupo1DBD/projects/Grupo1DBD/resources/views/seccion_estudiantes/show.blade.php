<!DOCTYPE html>
<html>
 <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title> Datos del Sección_Estudiante </title>
 </head>
 <body>
    <h1> {{ $seccion_estudiante->id }} </h1>
    <ul>
       <li> ID estudiante: {{ $seccion_estudiante->id_estudiante }} </li>
       <li> ID matricula: {{ $seccion_estudiante->id_seccion }} </li>
       <li> Fecha: {{ $seccion_estudiante->semestre }} </li>
    </ul>
    
    <a href="{{ url ('seccion_estudiantes') }}">Volver atras</a>
 </body>
</html>