<!DOCTYPE html>
<html>
 <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title> Datos de coordinador </title>
 </head>
 <body>
    <h1> {{ $coordinador->id }} </h1>
    <ul>
       <li> Nombre: {{ $coordinador->nombre_coordinador }} </li>
       <li> Fecha de nacimiento: {{ $coordinador->fecha_nacimiento_coordinador }} </li>
       <li> Correo: {{ $coordinador->correo_coordinador }} </li>
       <li> Telefono: {{ $coordinador->telefono_coordinador }} </li>
       <li> Tipo: {{ $coordinador->tipo_coordinador }} </li>
       <li> ID direccion: {{ $coordinador->id_direccion }} </li>
    </ul>
    
    <a href="{{ url ('coordinadors') }}">Volver atras</a>
 </body>
</html>