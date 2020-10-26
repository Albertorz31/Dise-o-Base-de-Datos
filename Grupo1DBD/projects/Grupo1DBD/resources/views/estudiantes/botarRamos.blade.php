
@extends('layout')
@section('contenido')
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title> Horarios </title>
</head>
<body>

<h1> Desinscribir Asignaturas: </h1>
@if(Session::has('notice'))
<p> <strong> {{ Session::get('notice') }} </strong> </p>
@endif
@if($seccion_horarios->count())
<table class="table">
    <thead class="thead-dark">
    <tr>
        <th style="text-align: center;" scope="col"> Asignatura </th>
        <th style="text-align: center;" scope="col"> Acción </th>
    </tr>
    </thead>
    <tbody>
    @foreach($seccion_horarios as $item)
    <tr>
        <td style="text-align: center;"> {{ $item->nombre_asignatura }} </td>
        <td style="text-align: center;"> {{ link_to('estudiantes/estudianteDesinscribir/' .Auth::user()->id .'/'  .$item->id, 'Desinscribir') }} </td>
    </tr>
    @endforeach
    </tbody>
</table>

@else
<p> No se han asignaturas</p>
@endif

</body>
</html>
@endsection
