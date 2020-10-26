<!DOCTYPE html>
<html>
 <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title> Datos de profesor </title>
 </head>
 <body>
    <h1> {{ $profesor->id }} </h1>
    <ul>
       <li> Nombre: {{ $profesor->nombre_profesor }} </li>
       <li> Fecha de nacimiento: {{ $profesor->fecha_nacimiento_profesor }} </li>
       <li> Correo: {{ $profesor->correo_profesor }} </li>
       <li> Telefono: {{ $profesor->telefono_profesor }} </li>
       <li> Asignaturas impartidas: {{ $profesor->asignaturas_impartidas }} </li>
       <li> Especialidad: {{ $profesor->especialidad_profesor }} </li>
       <li> ID direccion: {{ $profesor->id_direccion }} </li>
    </ul>

    <a href="{{ url ('profesors') }}">Volver atras</a>
 </body>
</html>
