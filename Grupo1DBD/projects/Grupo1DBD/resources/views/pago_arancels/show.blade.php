<!DOCTYPE html>
<html>
 <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title> Datos del pago_arancel </title>
 </head>
 <body>
    <h1> {{ $pago_arancel->id }} </h1>
    <ul>
       <li> ID Pago: {{ $pago_arancel->id_pago }} </li>
       <li> ID Arancel: {{ $pago_arancel->id_arancel }} </li>
       <li> Fecha: {{ $pago_arancel->fecha }} </li>
    </ul>
    
    <a href="{{ url ('pago_arancels') }}">Volver atras</a>
 </body>
</html>