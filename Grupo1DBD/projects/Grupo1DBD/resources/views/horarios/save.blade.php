@extends('coordinadors/layoutcoordinador')
@section('contenido') 
<!DOCTYPE html>
<html>
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <title> Guargar Horario </title>
 </head>
 <body>
	<h1> Guardar Horario </h1>
	{{ Form::open(array('url' => 'horarios/' . $horario->id)) }}
	   {{ Form::label ('id', 'ID') }}
	   <br />
	   {{ Form::text ('id', $horario->id) }}
	   <br />
	   {{ Form::label ('dia', 'Días') }}
	   <br />
	   {{ Form::text ('dia', $horario->dia) }}
	   <br />
	   {{ Form::label ('modulo', 'Módulos') }}
	   <br />
	   {{ Form::text ('modulo', $horario->modulo) }}
       <br />
       
	   @if($horario->id)
          {{ Form::hidden ('_method', 'PUT') }}
       @else
         
       @endif

       {{ Form::submit('Guardar Horario') }}
       {{ link_to('facultads', 'Cancelar') }}
   {{ Form::close() }}
</body>
</html>
@endsection
