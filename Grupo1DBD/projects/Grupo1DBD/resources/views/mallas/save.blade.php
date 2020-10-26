<!DOCTYPE html>
<html>
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <title> Guardar malla </title>
 </head>
 <body>
    <h1> Guardar malla </h1>
    {{ Form::open(array('url' => 'mallas/' . $malla->id)) }}
       {{ Form::label ('id', 'ID') }}
       <br />
       {{ Form::text ('id', $malla->id) }}
       <br />

       {{ Form::label ('total_asignaturas', 'Total asignaturas') }}
       <br />
       {{ Form::text ('total_asignaturas', $malla->total_asignaturas) }}
       <br />

       {{ Form::label ('cantidad_semestres', 'Cantidad de Semestres') }}
       <br />
       {{ Form::text ('cantidad_semestres', $malla->cantidad_semestres) }}
       <br />

       
       @if($malla->id)
          {{ Form::hidden ('_method', 'PUT') }}
       @else
         
       @endif
       
       {{ Form::submit('Guardar malla') }}
       {{ link_to('mallas', 'Cancelar') }}
    {{ Form::close() }}
 </body>
</html>