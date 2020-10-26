<!DOCTYPE html>
<html>
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <title> Guardar utilidad </title>
 </head>
 <body>
    <h1> Guardar utilidad </h1>
    {{ Form::open(array('url' => 'utilidads/' . $utilidad->id)) }}
       {{ Form::label ('id', 'ID') }}
       <br />
       {{ Form::text ('id', $utilidad->id) }}
       <br />

       {{ Form::label ('documentos_disponibles', 'Documentos disponibles') }}
       <br />
       {{ Form::text ('documentos_disponibles', $utilidad->documentos_disponibles) }}
       <br />

       {{ Form::label ('certificados_disponibles', 'Certificados disponibles') }}
       <br />
       {{ Form::text ('certificados_disponibles', $utilidad->certificados_disponibles) }}
       <br />

       {{ Form::label ('solicitudes_enviadas', 'Solicitudes enviadas') }}
       <br />
       {{ Form::text ('solicitudes_enviadas', $utilidad->solicitudes_enviadas) }}
       <br />

       {{ Form::label ('id_estudiante', 'ID estudiante') }}
       <br />
       {{ Form::text ('id_estudiante', $utilidad->id_estudiante) }}
       <br />


       @if($utilidad->id)
          {{ Form::hidden ('_method', 'PUT') }}
       @else

       @endif

       {{ Form::submit('Guardar utilidad') }}
       {{ link_to('utilidadss', 'Cancelar') }}
    {{ Form::close() }}
 </body>
</html>
