<!DOCTYPE html>
<html>
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <title> Guardar administrador </title>
 </head>
 <body>
    <h1> Guardar administrador </h1>
    {{ Form::open(array('url' => 'administradors/' . $administrador->id)) }}
       {{ Form::label ('id', 'ID') }}
       <br />
       {{ Form::text ('id', $administrador->id) }}
       <br />

       {{ Form::label ('nombre_administrador', 'Nombre') }}
       <br />
       {{ Form::text ('nombre_administrador', $administrador->nombre_administrador) }}
       <br />

       {{ Form::label ('password', 'Contraseña') }}
       <br />
       {{ Form::text ('password', $administrador->password) }}
       <br />

       {{ Form::label ('fecha_nacimiento_administrador', 'Fecha de nacimiento') }}
       <br />
       {{ Form::text ('fecha_nacimiento_administrador', $administrador->fecha_nacimiento_administrador) }}
       <br />

       {{ Form::label ('email', 'Correo') }}
       <br />
       {{ Form::text ('email', $administrador->email) }}
       <br />

       {{ Form::label ('telefono_adminstrador', 'Telefono') }}
       <br />
       {{ Form::text ('telefono_adminstrador', $administrador->telefono_adminstrador) }}
       <br />

       {{ Form::label ('id_direccion', 'ID direccion') }}
       <br />
       {{ Form::text ('id_direccion', $administrador->id_direccion) }}
       <br />


       @if($administrador->id)
          {{ Form::hidden ('_method', 'PUT') }}
       @else

       @endif

       {{ Form::submit('Guardar administrador') }}
       {{ link_to('administradors/adminHome', 'Cancelar') }}
    {{ Form::close() }}
 </body>
</html>
