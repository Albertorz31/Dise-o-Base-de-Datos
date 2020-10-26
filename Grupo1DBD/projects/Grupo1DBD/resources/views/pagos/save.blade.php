@extends('main')
<!DOCTYPE html>
<html>
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <title> Guardar Pago </title>
 </head>
 <body>
    <h1> Guardar Pago </h1>
    {{ Form::open(array('url' => 'pagos/' . $pago->id)) }}
    
       <br />
       <label>Asociar Tarjeta:</label>
       {{ Form::select ('tipo_pago', array('Debito' => 'Debito','Credito'=>'Credito')) }}
       <br />
       <label> Tarjeta de Credito </label>
       <input type="text" placeholder="XXXX-XXXX-XXX-XXXX-XXXX">
       <label> Codigo Verificador </label>
       <input type="text" placeholder="***">
       <br />
       <label> Cuotas:</label>
       <select class="form-control" id="exampleFormControlSelect1">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      </select>
       <br />
       <br />
       <label>Pago de:</label>
       {{ Form::select ('pagado', array('Matricula' => 'Matricula','Mensualidad'=>'Mensualidad')) }}
       <br />
       <br />

       @if($pago->id)
          {{ Form::hidden ('_method', 'PUT') }}
       @else
         
       @endif
       
       {{ Form::submit('Guardar pago') }}
       {{ link_to('pagos', 'Cancelar') }}
    {{ Form::close() }}
 </body>
</html>