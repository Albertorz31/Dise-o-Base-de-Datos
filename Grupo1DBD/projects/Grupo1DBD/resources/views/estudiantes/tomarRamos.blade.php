
@extends('layout')
@section('contenido')
        <!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
    <h1> Inscribir Asignaturas: </h1>
    @if(Session::has('notice'))
    <p> <strong> {{ Session::get('notice') }} </strong> </p>
    @endif
    @if($data[0]->count())
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th style="text-align: center;" scope="col"> Asignatura </th>
            <th style="text-align: center;" scope="col"> Acción </th>
        </tr>
        </thead>
        <tbody>
        @foreach($data[0] as $item)
        <tr>
            <td style="text-align: center;"> {{ $item->nombre_asignatura }} </td>
            <td style="text-align: center;"> {{ link_to('estudiantes/estudianteInscribir/' .Auth::user()->id .'/'  .$item->id, 'Inscribir') }} </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    @endif
    <h1> Recomendación: </h1>
    @if($data[1]->count())
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th style="text-align: center;" scope="col"> Asignatura </th>
            <th style="text-align: center;" scope="col"> Acción </th>
        </tr>
        </thead>
        <tbody>
        @foreach($data[1] as $item)
        <tr>
            <td style="text-align: center;"> {{ $item->nombre_asignatura }} </td>
            <td style="text-align: center;"> {{ link_to('estudiantes/estudianteInscribir/' .Auth::user()->id .'/'  .$item->id, 'Inscribir') }} </td>
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
