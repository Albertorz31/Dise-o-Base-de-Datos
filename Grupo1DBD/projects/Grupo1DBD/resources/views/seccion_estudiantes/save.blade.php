<!DOCTYPE html>
<html>
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <title> Guardar Sección_Estudiante </title>
 </head>
 <body>
    <h1> Guardar Sección_Estudiante </h1>
    {{ Form::open(array('url' => 'seccion_estudiantes/' . $seccion_estudiante->id)) }}
       {{ Form::label ('id', 'ID') }}
       <br />
       {{ Form::text ('id', $seccion_estudiante->id) }}
       <br />

       {{ Form::label ('id_estudiante', 'ID Estudiante') }}
       <br />
       {{ Form::text ('id_estudiante', $seccion_estudiante->id_estudiante) }}
       <br />

       {{ Form::label ('id_seccion', 'ID Sección') }}
       <br />
       {{ Form::text ('id_seccion', $seccion_estudiante->id_seccion) }}
       <br />

       {{ Form::label ('semestre', 'Semestre') }}
       <br />
       {{ Form::text ('semestre', $seccion_estudiante->semestre) }} 
       <br /> 

       @if($seccion_estudiante->id)
          {{ Form::hidden ('_method', 'PUT') }}
       @else
         
       @endif
       
       {{ Form::submit('Guardar seccion_estudiantes') }}
       {{ link_to('seccion_estudiantes', 'Cancelar') }}
    {{ Form::close() }}
 </body>
</html>