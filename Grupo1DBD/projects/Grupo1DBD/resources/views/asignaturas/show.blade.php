<!DOCTYPE html>
<html>
 <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title> Datos de la asignatura </title>
 </head>
 <body>
    <h1> {{ $asignatura->id }} </h1>
    <ul>
       <li> Nombre: {{ $asignatura->nombre_asignatura }} </li>
       <li> Nivel: {{ $asignatura->nivel_asignatura }} </li>
       <li> ID malla: {{ $asignatura->id_malla }} </li>
    </ul>
    
    <a href="{{ url ('asignaturas') }}">Volver atras</a>
 </body>
</html>