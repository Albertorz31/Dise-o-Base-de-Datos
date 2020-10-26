<!DOCTYPE html>
<html>
 <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title> Datos de utilidad </title>
 </head>
 <body>
    <h1> {{ $utilidad->id }} </h1>
    <ul>
       <li> Documentos disponibles: {{ $utilidad->documentos_disponibles }} </li>
       <li> Certificados disponibles: {{ $utilidad->certificados_disponibles }} </li>
       <li> Solicitudes enviadas: {{ $utilidad->solicitudes_enviadas }} </li>
       <li> ID estudiante: {{ $utilidad->id_estudiante }} </li>
    </ul>

    <a href="{{ url ('utilidads') }}">Volver atras</a>
 </body>
</html>
