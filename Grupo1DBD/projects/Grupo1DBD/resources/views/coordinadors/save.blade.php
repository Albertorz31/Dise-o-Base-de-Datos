<!DOCTYPE html>
<html>
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <title> Guardar coordinador </title>
 </head>
 <body>
    <h1> Guardar coordinador </h1>
    {{ Form::open(array('url' => 'coordinadors/' . $coordinador->id)) }}

       {{ Form::label ('nombre_coordinador', 'Nombre') }}
       <br />
       {{ Form::text ('nombre_coordinador', $coordinador->nombre_coordinador) }}
       <br />

       {{ Form::label ('password', 'Contraseña') }}
       <br />
       {{ Form::text ('password', $coordinador->password) }}
       <br />

       {{ Form::label ('fecha_nacimiento_coordinador', 'Fecha de nacimiento') }}
       <br />
       {{ Form::text ('fecha_nacimiento_coordinador', $coordinador->fecha_nacimiento_coordinador) }} 
       <br /> 

       {{ Form::label ('email', 'Correo') }}
       <br />
       {{ Form::text ('email', $coordinador->email) }}
       <br />

       {{ Form::label ('telefono_coordinador', 'Telefono') }}
       <br />
       {{ Form::text ('telefono_coordinador', $coordinador->telefono_coordinador) }}
       <br />



       @if($coordinador->id)
          {{ Form::hidden ('_method', 'PUT') }}
       @else
         
       @endif
       
       {{ Form::submit('Guardar coordinador') }}
       {{ link_to('coordinadors/coordinadorHome', 'Cancelar') }}
    {{ Form::close() }}
 </body>
</html>