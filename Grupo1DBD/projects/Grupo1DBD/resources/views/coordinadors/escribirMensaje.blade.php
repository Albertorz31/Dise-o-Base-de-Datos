@extends('coordinadors/layoutcoordinador')
@section('contenido') 
<!DOCTYPE html>
<html>
<body>
<div class="container">
    {{ Form::open(['action' => ['MensajeController@enviarMensajeCoordinador', Auth::user()->id, $destino]]) }}

    <center><div class="form-group">
        {{ Form::label ('encabezado', 'Encabezado') }}<br>
        {{ Form::text('encabezado') }}<br><br>
    </div></center>
    <center><div class="form-group">
        {{ Form::label ('texto', 'Ingrese el contenido:') }}<br>
        {{ Form::textarea('texto')}}<br><br>
    </div></center>
</div>
<center><div class="form-group">
    {{ Form::label ('destinos', 'Destino') }}<br>
    {{ Form::select('destinos', $destinos->all()) }}<br><br>
</div></center>
<center><div class="form-group">
    {{ Form::submit('Enviar') }}
</div></center>


{{ Form::close() }}
</div>
</body>
</html>
@endsection
