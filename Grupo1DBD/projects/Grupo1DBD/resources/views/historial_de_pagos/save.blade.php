<!DOCTYPE html>
<html>
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <title> Guardar Historial de Pago </title>
 </head>
 <body>
    <h1> Guardar Historial de Pago </h1>
    {{ Form::open(array('url' => 'historial_de_pagos/' . $historial_de_pagos->id)) }}
       {{ Form::label ('id', 'ID') }}
       <br />
       {{ Form::text ('id', $historial_de_pagos->id) }}
       <br />

       {{ Form::label ('fecha_pago', 'Fecha de Pago') }}
       <br />
       {{ Form::text ('fecha_pago', $historial_de_pagos->fecha_pago) }}
       <br />

       {{ Form::label ('monto_pago', 'Monto') }}
       <br />
       {{ Form::text ('monto_pago', $historial_de_pagos->monto_pago) }}
       <br />

       @if($historial_de_pagos->id)
          {{ Form::hidden ('_method', 'PUT') }}
       @else
         
       @endif
       
       {{ Form::submit('Guardar historial de pago') }}
       {{ link_to('historial_de_pagos', 'Cancelar') }}
    {{ Form::close() }}
 </body>
</html>