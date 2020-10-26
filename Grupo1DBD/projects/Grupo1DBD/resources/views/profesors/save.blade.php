@extends('main')
<!DOCTYPE html>
<html>
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <title> Guardar profesor </title>
 </head>
 <body>
 <div class="container">
    <h1> Guardar profesor </h1>
    {{ Form::open(array('url' => 'profesors/' . $profesor->id)) }}


       {{ Form::label ('nombre_profesor', 'Nombre') }}
       <br />
       {{ Form::text ('nombre_profesor', $profesor->nombre_profesor) }}
       <br />
       <br />

       {{ Form::label ('password', 'Contraseña') }}
       <br />
       {{ Form::text ('password', $profesor->password) }}
       <br />
       <br />

       {{ Form::label ('fecha_nacimiento_profesor', 'Fecha de nacimiento') }}
       <br />
       {{ Form::text ('fecha_nacimiento_profesor', $profesor->fecha_nacimiento_profesor) }}
       <br />
       <br />

       {{ Form::label ('email', 'Correo') }}
       <br />
       {{ Form::text ('email', $profesor->email) }}
       <br />
       <br />

       {{ Form::label ('telefono_profesor', 'Telefono') }}
       <br />
       {{ Form::text ('telefono_profesor', $profesor->telefono_profesor) }}
       <br />
       <br />


       @if($profesor->id)
          {{ Form::hidden ('_method', 'PUT') }}
       @else

       @endif

       {{ Form::submit('Guardar profesor') }}
       {{ link_to('profesors/profesorHome', 'Cancelar') }}
    {{ Form::close() }}
    </div>
 </body>
</html>
