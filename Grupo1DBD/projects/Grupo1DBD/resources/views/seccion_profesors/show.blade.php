<!DOCTYPE html>
<html>
 <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title> Datos del seccion_profesor </title>
 </head>
 <body>
    <h1> {{ $seccion_profesor->id }} </h1>
    <ul>
       <li> ID Pago: {{ $seccion_profesor->id_profesor }} </li>
       <li> ID matricula: {{ $seccion_profesor->id_seccion }} </li>
       <li> Fecha: {{ $seccion_profesor->semestre }} </li>
    </ul>
    
    <a href="{{ url ('seccion_profesors') }}">Volver atras</a>
 </body>
</html>