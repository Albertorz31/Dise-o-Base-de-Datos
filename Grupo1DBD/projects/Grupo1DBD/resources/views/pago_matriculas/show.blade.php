<!DOCTYPE html>
<html>
 <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title> Datos del pago_matricula </title>
 </head>
 <body>
    <h1> {{ $pago_matricula->id }} </h1>
    <ul>
       <li> ID Pago: {{ $pago_matricula->id_pago }} </li>
       <li> ID matricula: {{ $pago_matricula->id_matricula }} </li>
       <li> Fecha: {{ $pago_matricula->fecha }} </li>
    </ul>
    
    <a href="{{ url ('pago_matriculas') }}">Volver atras</a>
 </body>
</html>