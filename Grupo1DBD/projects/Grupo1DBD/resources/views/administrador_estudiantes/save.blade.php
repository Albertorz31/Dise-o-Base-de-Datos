<!DOCTYPE html>
<html>
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <title> Guardar Administrador_Estudiante </title>
 </head>
 <body>
    <h1> Guardar Administrador_Estudiante </h1>
    {{ Form::open(array('url' => 'administrador_estudiantes/' . $administrador_estudiante->id)) }}
       {{ Form::label ('id', 'ID') }}
       <br />
       {{ Form::text ('id', $administrador_estudiante->id) }}
       <br />

       {{ Form::label ('id_administrador', 'ID Administrador') }}
       <br />
       {{ Form::text ('id_administrador', $administrador_estudiante->id_administrador) }}
       <br />

       {{ Form::label ('id_estudiante', 'ID Estudiante') }}
       <br />
       {{ Form::text ('id_estudiante', $administrador_estudiante->id_estudiante) }}
       <br />

       @if($administrador_estudiante->id)
          {{ Form::hidden ('_method', 'PUT') }}
       @else

       @endif

       {{ Form::submit('Guardar administrador_estudiantes') }}
       {{ link_to('administrador_estudiantes', 'Cancelar') }}
    {{ Form::close() }}
 </body>
</html>