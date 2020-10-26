<!DOCTYPE html>
<html>
 <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title> Datos del pago </title>
 </head>
 <body>
    <h1> {{ $pago->id }} </h1>
    <ul>
       <li> ID Estudiante: {{ $pago->id_estudiante }} </li>
       <li> Tipo de Pago: {{ $pago->tipo_pago }} </li>
       <li> Pagado: {{ $pago->pagado }} </li>
       <li> Número de Cuenta: {{ $pago->num_cuenta }} </li>
    </ul>
    
    <a href="{{ url ('pagos') }}">Volver atras</a>
 </body>
</html>