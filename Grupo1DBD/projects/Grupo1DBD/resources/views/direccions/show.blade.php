<!DOCTYPE html>
<html>
 <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title> Datos de direccion </title>
 </head>
 <body>
    <h1> {{ $direccion->id }} </h1>
    <ul>
       <li> Comuna: {{ $direccion->comuna_direccion }} </li>
       <li> Calle: {{ $direccion->calle_direccion }} </li>
       <li> Nombre direccion: {{ $direccion->nombre_direccion }} </li>
       <li> Numero: {{ $direccion->numero_direccion }} </li>
       <li> Region: {{ $direccion->region }} </li>
       <li> Pais: {{ $direccion->pais }} </li>
    </ul>
    
    <a href="{{ url ('direccions') }}">Volver atras</a>
 </body>
</html>