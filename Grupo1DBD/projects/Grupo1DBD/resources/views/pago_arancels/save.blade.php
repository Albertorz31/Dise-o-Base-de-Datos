<!DOCTYPE html>
<html>
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <title> Guardar Pago_arancel </title>
 </head>
 <body>
    <h1> Guardar Pago_arancel </h1>
    {{ Form::open(array('url' => 'pago_arancels/' . $pago_arancel->id)) }}
       {{ Form::label ('id', 'ID') }}
       <br />
       {{ Form::text ('id', $pago_arancel->id) }}
       <br />

       {{ Form::label ('id_pago', 'ID Pago') }}
       <br />
       {{ Form::text ('id_pago', $pago_arancel->id_pago) }}
       <br />

       {{ Form::label ('id_arancel', 'ID Arancel') }}
       <br />
       {{ Form::text ('id_arancel', $pago_arancel->id_arancel) }}
       <br />

       {{ Form::label ('fecha', 'Fecha') }}
       <br />
       {{ Form::text ('fecha', $pago_arancel->fecha) }} 
       <br /> 

       @if($pago_arancel->id)
          {{ Form::hidden ('_method', 'PUT') }}
       @else
         
       @endif
       
       {{ Form::submit('Guardar pago_arancels') }}
       {{ link_to('pago_arancels', 'Cancelar') }}
    {{ Form::close() }}
 </body>
</html>