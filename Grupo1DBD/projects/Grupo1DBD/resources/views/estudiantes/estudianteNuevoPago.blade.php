@extends('main')
<!DOCTYPE html>
<html lang="es">
<head>
	 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title> Guarda Pago</title>
      <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
      <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
      <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
</head>
<body>
	<h1> Pagar </h1>
	{{ Form::open(array('url' => 'estudiantes/estudiantePago' .$pago[0]))  }}
	   {{ Form::label ('id', 'ID') }}
       <br />
       {{ Form::text ('id', $pago[2]->id) }}
       <br />

       {{ Form::label ('id_estudiante', 'ID Estudiante') }}
       <br />
       {{ Form::text ('id_estudiante', $pago[0]) }}
       <br />
       <br />
       <label>Tipo de Tarjeta:</label>
       {{ Form::select ('tipo_pago', array('Debito' => 'Debito','Credito'=>'Credito')) }}
      <a href="#ventana1" class="btn btn-primary"   data-toggle="modal"> Asociar Tarjeta </a>
      <div class="modal fade" id="ventana1">
            <div class="modal-dialog">
                  <p>Lorem</p>
            </div>
       </div>       
       <br />
       <br />
       <br />
       <label>Pago de:</label>
       {{ Form::select ('pagado', array('Matricula' => 'Matricula','Arancel'=>'Arancel')) }}
       <br />
       <br />
       {{ Form::label ('num_cuenta', 'Número de Cuenta') }}
       <br />
       {{ Form::text ('num_cuenta', $pago[2]->num_cuenta) }}
       <br /> 

       @if($pago[2]->id)
          {{ Form::hidden ('_method', 'PUT') }}
       @else
         
       @endif

       
       {{ Form::submit('Guardar pago') }}
       {{ link_to('pagos', 'Cancelar') }}
    {{ Form::close() }} 
</body>
</html>
