<!DOCTYPE html>
<html>
 <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title> Datos de carrera </title>
 </head>
 <body>
    <h1> {{ $carrera->id }} </h1>
    <ul>
       <li> Nombre carrera: {{ $carrera->nombre_carrera }} </li>
       <li> Duracion semestres : {{ $carrera->duracion_semestres }} </li>
       <li> Jornada: {{ $carrera->jornada }} </li>
       <li> Arancel: {{ $carrera->arancel }} </li>
       <li> Grado academico: {{ $carrera->grado_academico }} </li>
       <li> Titulo profesional: {{ $carrera->titulo_profesional }} </li>
       <li> Acreditacion: {{ $carrera->acreditacion }} </li>
       <li> Numero estudiantes: {{ $carrera->numero_estudiantes }} </li>
       <li> ID Facultad: {{ $carrera->id_facultad }} </li>
       <li> ID malla: {{ $carrera->id_malla }} </li>
    </ul>
    
    <a href="{{ url ('carreras') }}">Volver atras</a>
 </body>
</html>