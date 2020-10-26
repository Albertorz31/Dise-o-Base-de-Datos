<!DOCTYPE html>
<html>
 <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title> Datos del historial de pago</title>
 </head>
 <body>
    <h1> {{ $historial_de_pago->id }} </h1>
    <ul>
       <li> Fecha de Pago: {{ $historial_de_pago->fecha_pago }} </li>
       <li> Monto de Pago: {{ $historial_de_pago->monto_pago }} </li>
    </ul>
    
    <a href="{{ url ('historial_de_pagos') }}">Volver atras</a>
 </body>
</html>