<!DOCTYPE html>
<html>
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <title> Guargar Facultad </title>
 </head>
 <body>
	<h1> Guardar Facultad </h1>
	{{ Form::open(array('url' => 'facultads/' . $facultad->id)) }}
	   {{ Form::label ('id', 'ID') }}
	   <br />
	   {{ Form::text ('id', $facultad->id) }}
	   <br />
	   {{ Form::label ('nombre_facultad', 'Nombre de la Facultad') }}
	   </br />
	   {{ Form::text ('nombre_facultad', $facultad->nombre_facultad) }}
	   <br />
	   {{ Form::label ('numero_carreras', 'Numero de carreras') }}
	   <br />
	   {{ Form::text ('numero_carreras', $facultad->numero_carreras) }}
	   <br />
	   {{ Form::label ('numero_estudiantes', 'Numero de estudiantes') }}
	   <br />
	   {{ Form::text ('numero_estudiantes', $facultad->numero_estudiantes) }}
       <br />
	   @if($facultad->id)
          {{ Form::hidden ('_method', 'PUT') }}
       @else
         
       @endif

       {{ Form::submit('Guardar Facultad') }}
       {{ link_to('facultads', 'Cancelar') }}
   {{ Form::close() }}
</body>
</html>