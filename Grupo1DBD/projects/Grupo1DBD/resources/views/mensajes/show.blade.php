<!DOCTYPE html>
<html>
 <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title> Datos de mensaje </title>
 </head>
 <body>
    <h1> {{ $mensaje->id }} </h1>
    <ul>
       <li> Correo asociado: {{ $mensaje->correo_asociado }} </li>
       <li> Texto: {{ $mensaje->texto }} </li>
       <li> Fecha de envío: {{ $mensaje->fecha_envio }} </li>
       <li> Hora de envío: {{ $mensaje->hora_envio }} </li>
       <li> Remitente: {{ $mensaje->envia }} </li>
       <li> ID administrador: {{ $mensaje->id_administrador }} </li>
       <li> ID estudiante: {{ $mensaje->id_estudiante }} </li>
       <li> ID coordinador: {{ $mensaje->id_coordinador }} </li>
       <li> ID profesor: {{ $mensaje->id_profesor }} </li>
    </ul>
    
    <a href="{{ url ('mensajes') }}">Volver atras</a>
 </body>
</html>