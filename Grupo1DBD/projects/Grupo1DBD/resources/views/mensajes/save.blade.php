<!DOCTYPE html>
<html>
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <title> Guardar mensaje </title>
 </head>
 <body>
    <h1> Guardar mensaje </h1>
    {{ Form::open(array('url' => 'mensajes/' . $mensaje->id)) }}
       {{ Form::label ('id', 'ID') }}
       <br />
       {{ Form::text ('id', $mensaje->id) }}
       <br />

       {{ Form::label ('correo_asociado', 'Correo asociado') }}
       <br />
       {{ Form::text ('correo_asociado', $mensaje->correo_asociado) }}
       <br />

       {{ Form::label ('texto', 'Texto') }}
       <br />
       {{ Form::text ('texto', $mensaje->texto) }} 
       <br /> 

       {{ Form::label ('fecha_envio', 'Fecha de Envío') }}
       <br />
       {{ Form::text ('fecha_envio', $mensaje->fecha_envio) }}
       <br />

       {{ Form::label ('hora_envio', 'Hora de Envío') }}
       <br />
       {{ Form::text ('hora_envio', $mensaje->hora_envio) }}
       <br />

       {{ Form::label ('envia', 'Remitente') }}
       <br />
       {{ Form::text ('envia', $mensaje->envia) }}
       <br />

       {{ Form::label ('id_administrador', 'ID administrador') }}
       <br />
       {{ Form::text ('id_administrador', $mensaje->id_administrador) }}
       <br />

       {{ Form::label ('id_estudiante', 'ID estudiante') }}
       <br />
       {{ Form::text ('id_estudiante', $mensaje->id_estudiante) }}
       <br />

       {{ Form::label ('id_coordinador', 'ID coordinador') }}
       <br />
       {{ Form::text ('id_coordinador', $mensaje->id_coordinador) }}
       <br />

       {{ Form::label ('id_profesor', 'ID profesor') }}
       <br />
       {{ Form::text ('id_profesor', $mensaje->id_profesor) }}
       <br />


       @if($mensaje->id)
          {{ Form::hidden ('_method', 'PUT') }}
       @else
         
       @endif
       
       {{ Form::submit('Guardar mensaje') }}
       {{ link_to('mensajes', 'Cancelar') }}
    {{ Form::close() }}
 </body>
</html>