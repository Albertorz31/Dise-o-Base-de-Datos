<!DOCTYPE html>
<html>
 <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title> Datos de la seccion </title>
 </head>
 <body>
    <h1> {{ $seccion->id }} </h1>
    <ul>
       <li> Tipo: {{ $seccion->tipo_seccion}} </li>
       <li> Sala: {{ $seccion->sala }} </li>
       <li> Módulo: {{ $seccion->modulo }} </li>
       <li> ID asignatura: {{ $seccion->id_asignatura }} </li>
       <li> ID horario: {{ $seccion->id_horario }} </li>
    </ul>
    
    <a href="{{ url ('seccions') }}">Volver atras</a>
 </body>
</html>