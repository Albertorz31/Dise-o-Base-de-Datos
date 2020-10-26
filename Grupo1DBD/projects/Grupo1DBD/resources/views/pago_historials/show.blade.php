<!DOCTYPE html>
<html>
 <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title> Datos del pago_historial </title>
 </head>
 <body>
    <h1> {{ $pago_historial->id }} </h1>
    <ul>
       <li> ID Pago: {{ $pago_historial->id_pago }} </li>
       <li> ID historial: {{ $pago_historial->id_historial }} </li>
    </ul>
    
    <a href="{{ url ('pago_historials') }}">Volver atras</a>
 </body>
</html>