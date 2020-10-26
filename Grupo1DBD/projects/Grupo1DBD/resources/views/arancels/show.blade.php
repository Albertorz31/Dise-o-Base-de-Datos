<!DOCTYPE html>
<html>
 <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title> Datos del arancel </title>
 </head>
 <body>
    <h1> {{ $arancel->id }} </h1>
    <ul>
       <li> Fecha de Vencimiento: {{ $arancel->fecha_vencimiento_arancel }} </li>
       <li> Monto: {{ $arancel->monto_arancel }} </li>
       <li> Semestre Arancel: {{ $arancel->semestre_arancel }} </li>
    </ul>
    
    <a href="{{ url ('arancels') }}">Volver atras</a>
 </body>
</html>