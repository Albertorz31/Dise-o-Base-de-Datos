<!DOCTYPE html>
<html>
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <title> Guardar Sección_Profesor </title>
 </head>
 <body>
    <h1> Guardar Sección_Profesor </h1>
    {{ Form::open(array('url' => 'seccion_profesors/' . $seccion_profesor->id)) }}
       {{ Form::label ('id', 'ID') }}
       <br />
       {{ Form::text ('id', $seccion_profesor->id) }}
       <br />

       {{ Form::label ('id_profesor', 'ID Profesor') }}
       <br />
       {{ Form::text ('id_profesor', $seccion_profesor->id_profesor) }}
       <br />

       {{ Form::label ('id_seccion', 'ID Sección') }}
       <br />
       {{ Form::text ('id_seccion', $seccion_profesor->id_seccion) }}
       <br />

       {{ Form::label ('semestre', 'Semestre') }}
       <br />
       {{ Form::text ('semestre', $seccion_profesor->semestre) }} 
       <br /> 

       @if($seccion_profesor->id)
          {{ Form::hidden ('_method', 'PUT') }}
       @else
         
       @endif
       
       {{ Form::submit('Guardar seccion_profesors') }}
       {{ link_to('seccion_profesors', 'Cancelar') }}
    {{ Form::close() }}
 </body>
</html>