<!DOCTYPE html>
<html>
 <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title> Datos de malla </title>
 </head>
 <body>
    <h1> {{ $malla->id }} </h1>
    <ul>
       <li> Total asignaturas: {{ $malla->total_asignaturas }} </li>
       <li> Cantidad de Semestres: {{ $malla->cantidad_semestres }} </li>
    </ul>
    
    <a href="{{ url ('mallas') }}">Volver atras</a>
 </body>
</html>