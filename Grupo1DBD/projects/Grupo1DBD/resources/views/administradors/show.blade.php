<!DOCTYPE html>
<html>
 <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title> Datos de administrador </title>
 </head>
 <body>
    <h1> {{ $administrador->id }} </h1>
    <ul>
       <li> Nombre: {{ $administrador->nombre_administrador }} </li>
       <li> Fecha de nacimiento: {{ $administrador->fecha_nacimiento_administrador }} </li>
       <li> Correo: {{ $administrador->correo_administrador }} </li>
       <li> Telefono: {{ $administrador->telefono_adminstrador }} </li>
       <li> ID direccion: {{ $administrador->id_direccion }} </li>
    </ul>

    <a href="{{ url ('administradors') }}">Volver atras</a>
 </body>
</html>
