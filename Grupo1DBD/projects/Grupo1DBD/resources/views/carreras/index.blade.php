@extends('administradors/layoutadmin')
@section('contenido') 
<!DOCTYPE html>
<html>
 <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title> Carreras </title>
 </head>
 <body>
    <h1> Carreras </h1>
    @if(Session::has('notice'))
       <p> <strong> {{ Session::get('notice') }} </strong> </p>
    @endif
    <p> {{ link_to ('carreras/create', 'Crear nueva carrera') }} </p>
    @if($carreras->count())
       <table class="table">
          <thead class="thead-dark">
          <tr>
             <th style="text-align: center;" scope="col"> Nombre carrera </th>
             <th style="text-align: center;" scope="col"> Duracion semestres </th>
             <th style="text-align: center;" scope="col"> Jornada </th>
             <th style="text-align: center;" scope="col"> Arancel </th>
             <th style="text-align: center;" scope="col"> Grado academico </th>
             <th style="text-align: center;" scope="col"> Titulo profesional </th>
             <th style="text-align: center;" scope="col"> Acreditacion </th>
             <th style="text-align: center;" scope="col"> Numero estudiantes </th>
             <th style="text-align: center;" scope="col"> </th>
             <th style="text-align: center;" scope="col"> </th>
             <th style="text-align: center;" scope="col"> </th>
          </tr>
          </thead>
          <tbody>
          @foreach($carreras as $item)
             <tr>
                <td style="text-align: center;"> {{ $item->nombre_carrera }} </td>
                <td style="text-align: center;"> {{ $item->duracion_semestres }} </td>
                <td style="text-align: center;"> {{ $item->jornada }} </td>
                <td style="text-align: center;"> {{ $item->arancel }} </td>
                <td style="text-align: center;"> {{ $item->grado_academico }} </td>
                <td style="text-align: center;"> {{ $item->titulo_profesional }} </td>
                <td style="text-align: center;"> {{ $item->acreditacion }} </td>
                <td style="text-align: center;"> {{ $item->numero_estudiantes }} </td>
                <td style="text-align: center;"> {{ link_to('carreras/'.$item->id, 'Ver') }} </td>
                <td style="text-align: center;"> {{ link_to('carreras/'.$item->id.'/edit', 'Editar') }} </td>
                <td style="text-align: center;"> 
                    {{ Form::open(array('url' => 'carreras/'.$item->id)) }}
                        {{ Form::hidden("_method", "DELETE") }}
                       {{ Form::submit("Eliminar") }}
                   {{ Form::close() }}
                </td>
             </tr>
          @endforeach
          </tbody>
       </table>
    @else
       <p> No se han encontrado carreras </p>
    @endif
 </body>
</html>
@endsection