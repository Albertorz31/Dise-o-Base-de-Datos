<!DOCTYPE html>
<html>
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <title> Guardar Arancel </title>
 </head>
 <body>
    <h1> Guardar Arancel </h1>
    {{ Form::open(array('url' => 'arancels/' . $arancel->id)) }}
       {{ Form::label ('id', 'ID') }}
       <br />
       {{ Form::text ('id', $arancel->id) }}
       <br />

       {{ Form::label ('id_pago', 'ID Pago') }}
       <br />
       {{ Form::text ('id_pago', $arancel->id_pago) }}
       <br />

       {{ Form::label ('id_historial_de_pago', 'ID Historial de pago') }}
       <br />
       {{ Form::text ('id_historial_de_pago', $arancel->id_historial_de_pago) }}
       <br />

       {{ Form::label ('fecha_vencimiento_arancel', 'Fecha de vencimiento') }}
       <br />
       {{ Form::text ('fecha_vencimiento_arancel', $arancel->fecha_vencimiento_arancel) }}
       <br />

       {{ Form::label ('monto_arancel', 'Monto') }}
       <br />
       {{ Form::text ('monto_arancel', $arancel->monto_arancel) }}
       <br />

       {{ Form::label ('semestre_arancel', 'Semestre arancel') }}
       <br />
       {{ Form::text ('semestre_arancel', $arancel->semestre_arancel) }} 
       <br /> 

       @if($arancel->id)
          {{ Form::hidden ('_method', 'PUT') }}
       @else
         
       @endif
       
       {{ Form::submit('Guardar arancel') }}
       {{ link_to('arancels', 'Cancelar') }}
    {{ Form::close() }}
 </body>
</html>