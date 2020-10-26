<!DOCTYPE html>
<html>
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <title> Guardar Pago matricula </title>
 </head>
 <body>
    <h1> Guardar Pago_matricula </h1>
    {{ Form::open(array('url' => 'pago_matriculas/' . $pago_matricula->id)) }}
       {{ Form::label ('id', 'ID') }}
       <br />
       {{ Form::text ('id', $pago_matricula->id) }}
       <br />

       {{ Form::label ('id_pago', 'ID Pago') }}
       <br />
       {{ Form::text ('id_pago', $pago_matricula->id_pago) }}
       <br />

       {{ Form::label ('id_matricula', 'ID matricula') }}
       <br />
       {{ Form::text ('id_matricula', $pago_matricula->id_matricula) }}
       <br />

       {{ Form::label ('fecha', 'Fecha') }}
       <br />
       {{ Form::text ('fecha', $pago_matricula->fecha) }} 
       <br /> 

       @if($pago_matricula->id)
          {{ Form::hidden ('_method', 'PUT') }}
       @else
         
       @endif
       
       {{ Form::submit('Guardar pago_matriculas') }}
       {{ link_to('pago_matriculas', 'Cancelar') }}
    {{ Form::close() }}
 </body>
</html>