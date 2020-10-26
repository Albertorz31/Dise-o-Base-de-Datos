<!DOCTYPE html>
<html>
 <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title> Datos del administrador_profesor </title>
 </head>
 <body>
    <h1> {{ $administrador_profesor->id }} </h1>
    <ul>
       <li> ID Administrador: {{ $administrador_profesor->id_administrador }} </li>
       <li> ID Profesor: {{ $administrador_profesor->id_profesor }} </li>
    </ul>

    <a href="{{ url ('administrador_profesors') }}">Volver atras</a>
 </body>
</html>
