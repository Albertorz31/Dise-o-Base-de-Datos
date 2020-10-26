<!DOCTYPE html>
<html>
 <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title> Datos de estudiante </title>
 </head>
 <body>
    <h1> {{ $estudiante->id }} </h1>
    <ul>
       <li> Nombre: {{ $estudiante->nombre_estudiante }} </li>
       <li> Fecha de nacimiento: {{ $estudiante->fecha_nacimiento_estudiante }} </li>
       <li> Correo: {{ $estudiante->correo_estudiante }} </li>
       <li> Telefono: {{ $estudiante->telefono_estudiante }} </li>
       <li> Asignaturas aprobadas: {{ $estudiante->asignaturas_aprobadas }} </li>
       <li> Situacion estudiante: {{ $estudiante->situacion_estudiante }} </li>
       <li> Nivel estudiante: {{ $estudiante->nivel_estudiante }} </li>
       <li> Fecha ingreso: {{ $estudiante->fecha_ingreso }} </li>
       <li> Ultima matricula: {{ $estudiante->ultima_matricula }} </li>
       <li> ID direccion: {{ $estudiante->id_direccion }} </li>
       <li> ID carrera: {{ $estudiante->id_carrera }} </li>
    </ul>

    <a href="{{ url ('estudiantes') }}">Volver atras</a>
 </body>
</html>
