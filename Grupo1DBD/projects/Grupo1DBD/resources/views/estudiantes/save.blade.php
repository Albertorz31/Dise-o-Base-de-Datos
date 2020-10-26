@extends('main')
<!DOCTYPE html>
<html>
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <title> Guardar estudiante </title>
 </head>
 <body>
 <div class="container">
    <h1> Guardar estudiante </h1>
    {{ Form::open(array('url' => 'estudiantes/' . $estudiante->id)) }}


       {{ Form::label ('nombre_estudiante', 'Nombre') }}
       <br />
       {{ Form::text ('nombre_estudiante', $estudiante->nombre_estudiante) }}
       <br />
       <br />

       {{ Form::label ('password', 'Contraseña') }}
       <br />
       {{ Form::text ('password', $estudiante->password) }}
       <br />
       <br />

       {{ Form::label ('fecha_nacimiento_estudiante', 'Fecha de nacimiento') }}
       <br />
       {{ Form::text ('fecha_nacimiento_estudiante', $estudiante->fecha_nacimiento_estudiante) }}
       <br />
       <br />

       {{ Form::label ('email', 'Correo') }}
       <br />
       {{ Form::text ('email', $estudiante->email) }}
       <br />
       <br />

       {{ Form::label ('telefono_estudiante', 'Telefono') }}
       <br />
       {{ Form::text ('telefono_estudiante', $estudiante->telefono_estudiante) }}
       <br />
       <br />



       @if($estudiante->id)
          {{ Form::hidden ('_method', 'PUT') }}
       @else

       @endif

       {{ Form::submit('Guardar estudiante') }}
       {{ link_to('estudiantes/estudianteHome', 'Cancelar') }}
    {{ Form::close() }}
    </div>
 </body>
</html>
