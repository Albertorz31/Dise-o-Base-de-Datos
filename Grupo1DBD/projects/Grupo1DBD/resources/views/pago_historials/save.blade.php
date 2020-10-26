<!DOCTYPE html>
<html>
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <title> Guardar Pago_historial </title>
 </head>
 <body>
    <h1> Guardar Pago_historial </h1>
    {{ Form::open(array('url' => 'pago_historials/' . $pago_historial->id)) }}
       {{ Form::label ('id', 'ID') }}
       <br />
       {{ Form::text ('id', $pago_historial->id) }}
       <br />

       {{ Form::label ('id_pago', 'ID Pago') }}
       <br />
       {{ Form::text ('id_pago', $pago_historial->id_pago) }}
       <br />

       {{ Form::label ('id_historial', 'ID historial') }}
       <br />
       {{ Form::text ('id_historial', $pago_historial->id_historial) }}
       <br />

       @if($pago_historial->id)
          {{ Form::hidden ('_method', 'PUT') }}
       @else
         
       @endif
       
       {{ Form::submit('Guardar pago_historials') }}
       {{ link_to('pago_historials', 'Cancelar') }}
    {{ Form::close() }}
 </body>
</html>