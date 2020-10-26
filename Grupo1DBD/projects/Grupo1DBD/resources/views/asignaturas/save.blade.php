<!DOCTYPE html>
<html>
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <title> Guardar Asignatura </title>
 </head>
 <body>
    <h1> Guardar Asignatura </h1>
    {{ Form::open(array('url' => 'asignaturas/' . $asignatura->id)) }}
       {{ Form::label ('id', 'ID') }}
       <br />
       {{ Form::text ('id', $asignatura->id) }}
       <br />

       {{ Form::label ('nombre_asignatura', 'Nombre Asignatura') }}
       <br />
       {{ Form::text ('nombre_asignatura', $asignatura->nombre_asignatura) }}
       <br />

       {{ Form::label ('nivel_asignatura', 'Nivel') }}
       <br />
       {{ Form::text ('nivel_asignatura', $asignatura->nivel_asignatura) }}
       <br />
       <br />


       {{ Form::label ('id_malla', 'ID malla') }}
       <br />
       {{ Form::text ('id_malla', $asignatura->id_malla) }}
       <br />


       @if($asignatura->id)
          {{ Form::hidden ('_method', 'PUT') }}
       @else
         
       @endif
       
       {{ Form::submit('Guardar asignatura') }}
       {{ link_to('asignaturas', 'Cancelar') }}
    {{ Form::close() }}
 </body>
</html>