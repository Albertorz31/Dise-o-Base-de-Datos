@extends('profesors/layout')
@section('contenido') 
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<title> Notas </title>
</head>
<body>
	<div class="container">
		<div class="row">
		<h2><strong> Calificacion de Estudiante: </strong></br></h2></br>
		    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		    	<form>
		    		<div class="form-group">
		    			<label> Evaluación </label>
		    			<input type="text" class="form-control" placeholder="Inserte Evalcuación">
		    		</div>
		    		<div class="form-group">
		    			 <label> Calificación </label>
		    			<input type="text" class="form-control" placeholder="Inserte Calificación">
		    		</div>
		    		<a href="{{url('profesors/profesorAlumnos/' .$profesor->id)}}" class="btn btn-info"> Listo </a>
		    	</form>
		    </div>
		</div>
	</div>
</body>
</html>
@endsection