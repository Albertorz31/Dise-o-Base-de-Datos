<!DOCTYPE html>
<html>
 <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title> Datos de la matricula </title>
 </head>
 <body>
    <h1> {{ $matricula->id }} </h1>
    <ul>
       <li> ID de Pago: {{ $matricula->id_pago }} </li>
       <li> ID Historial de Pago: {{ $matricula->id_historial_de_pago }} </li>
       <li> Fecha de Vencimiento: {{ $matricula->fecha_vencimiento_matricula }} </li>
       <li> Monto Matricula: {{ $matricula->monto_matricula }} </li>
       <li> Semestre matricula: {{ $matricula->semestre_matricula }} </li>
    </ul>
    
    <a href="{{ url ('matriculas') }}">Volver atras</a>
 </body>
</html>