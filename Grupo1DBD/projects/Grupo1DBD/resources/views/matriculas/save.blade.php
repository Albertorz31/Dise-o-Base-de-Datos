<!DOCTYPE html>
<html>
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <title> Guardar Matricula </title>
 </head>
 <body>
    <h1> Guardar Matricula </h1>
    {{ Form::open(array('url' => 'matriculas/' . $matricula->id)) }}
       {{ Form::label ('id', 'ID') }}
       <br />
       {{ Form::text ('id', $matricula->id) }}
       <br />

       {{ Form::label ('id_pago', 'ID Pago') }}
       <br />
       {{ Form::text ('id_pago', $matricula->id_pago) }}
       <br />

       {{ Form::label ('id_historial_de_pago', 'ID Historial de pago') }}
       <br />
       {{ Form::text ('id_historial_de_pago', $matricula->id_historial_de_pago) }}
       <br />

       {{ Form::label ('fecha_vencimiento_matricula', 'Fecha de vencimiento') }}
       <br />
       {{ Form::text ('fecha_vencimiento_matricula', $matricula->fecha_vencimiento_matricula) }}
       <br />

       {{ Form::label ('monto_matricula', 'Monto') }}
       <br />
       {{ Form::text ('monto_matricula', $matricula->monto_matricula) }}
       <br />

       {{ Form::label ('semestre_matricula', 'Semestre matricula') }}
       <br />
       {{ Form::text ('semestre_matricula', $matricula->semestre_matricula) }} 
       <br /> 

       @if($matricula->id)
          {{ Form::hidden ('_method', 'PUT') }}
       @else
         
       @endif
       
       {{ Form::submit('Guardar matricula') }}
       {{ link_to('matriculas', 'Cancelar') }}
    {{ Form::close() }}
 </body>
</html>