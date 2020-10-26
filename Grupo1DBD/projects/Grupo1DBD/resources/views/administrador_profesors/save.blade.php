<!DOCTYPE html>
<html>
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <title> Guardar Administrador_Profesor </title>
 </head>
 <body>
    <h1> Guardar Administrador_profesor </h1>
    {{ Form::open(array('url' => 'administrador_profesors/' . $administrador_profesor->id)) }}
       {{ Form::label ('id', 'ID') }}
       <br />
       {{ Form::text ('id', $administrador_profesor->id) }}
       <br />

       {{ Form::label ('id_administrador', 'ID Administrador') }}
       <br />
       {{ Form::text ('id_administrador', $administrador_profesor->id_administrador) }}
       <br />

       {{ Form::label ('id_profesor', 'ID Profesor') }}
       <br />
       {{ Form::text ('id_profesor', $administrador_profesor->id_profesor) }}
       <br />

       @if($administrador_profesor->id)
          {{ Form::hidden ('_method', 'PUT') }}
       @else

       @endif

       {{ Form::submit('Guardar administrador_profesors') }}
       {{ link_to('administrador_profesors', 'Cancelar') }}
    {{ Form::close() }}
 </body>
</html>
