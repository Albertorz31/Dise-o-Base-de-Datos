@extends('main')
@section('content')
<!DOCTYPE html>
<html>
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <title> Guardar Documento </title>
 </head>
 <body>
    <h1 class="ui top attached blue header block segment"> Subir Documento</h1>
    {{ Form::open(array('url' => 'profesors/profesorsDocument/' . $documento->id)) }}
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
         
       @endif
    <div class="ui botton attached segment">
        {{ csrf_field() }}
        <input type="file" name="file" id="file">
    </div>
    {{ Form::submit('Guardar Documento') }}
       {{ link_to('profesors.profesorsDocument', 'Cancelar') }}
    {{ Form::close() }}
 </body>
</html>