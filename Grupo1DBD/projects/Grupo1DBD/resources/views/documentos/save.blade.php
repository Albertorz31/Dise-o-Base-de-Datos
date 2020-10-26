@extends('main')
<!DOCTYPE html>
<html>
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <title> Guardar Documento </title>
 </head>
 <body>
    <h1> Guardar Documento </h1>
    {{ Form::open(array('url' => 'documentos/' . $documento->id)) }}
       {{ Form::label ('id', 'ID') }}
       <br />
       {{ Form::text ('id', $documento->id) }}
       <br />

       {{ Form::label ('nombre_documento', 'Nombre del Documento') }}
       <br />
       {{ Form::text ('nombre_documento', $documento->nombre_documento) }}
       <br />

       {{ Form::label ('contenido', 'Contenido') }}
       <br />
       {{ Form::text ('contenido', $documento->contenido) }}
       <br />

       {{ Form::label ('fecha', 'Fecha') }}
       <br />
       {{ Form::text ('fecha', $documento->fecha) }} 
       <br /> 

       {{ Form::label ('id_seccion', 'ID seccion') }}
       <br />
       {{ Form::text ('id_seccion', $documento->id_seccion) }}
       <br />

       @if($documento->id)
          {{ Form::hidden ('_method', 'PUT') }}
       @else

       {{Form::open(array(
        'url' => 'documentos/save', 
        'files'=>true
        ))}}

       {{Form::label('file','File:')}}
       {{Form::file('file')}}
       <br />
       <br />


       @endif
       
       {{ Form::submit('Guardar Documento',array('class'=>'btn btn-success')) }}
       {{ link_to('documentos', 'Cancelar') }}
    {{ Form::close() }}
 </body>
</html>