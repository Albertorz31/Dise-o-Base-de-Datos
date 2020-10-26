@extends('administradors/layoutadmin')
@section('contenido') 
<!DOCTYPE html>
<html>
 <head>
 	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title> Asignaturas </title>
 </head>
 <body>
    <h1> Asignaturas </h1>
    @if(Session::has('notice'))
       <p> <strong> {{ Session::get('notice') }} </strong> </p>
    @endif
    <p> {{ link_to ('asignaturas/create', 'Crear nueva asignatura') }} </p>
    @if($asignaturas->count())
       <table class="table">
          <thead class="thead-dark">
          <tr>

             <th style="text-align: center;" scope="col"> Nombre </th>
             <th style="text-align: center;" scope="col"> Nivel de la asignatura </th>
             <th style="text-align: center;" scope="col"> Situación de la asignatura </th>
             <th style="text-align: center;" scope="col"> Calificación Cátedra </th>
             <th style="text-align: center;" scope="col"> Calificación Laboratorio </th>
             <th style="text-align: center;" scope="col"> Calificación Final </th>
             <th style="text-align: center;" scope="col"> </th>
             <th style="text-align: center;" scope="col"> </th>
             <th style="text-align: center;" scope="col"> </th>
          </tr>
          </thead>
          <tbody>
          @foreach($asignaturas as $item)
             <tr>
                <td style="text-align: center;"> {{ $item->nombre_asignatura }} </td>
                <td style="text-align: center;"> {{ $item->nivel_asignatura }} </td>
                <td style="text-align: center;"> {{ $item->situacion_asignatura}} </td>
                <td style="text-align: center;"> {{ $item->calificacion_catedra }} </td>
                <td style="text-align: center;"> {{ $item->calificacion_laboratorio}} </td>
                <td style="text-align: center;"> {{ $item->calificacion_final }} </td>
                <td style="text-align: center;"> {{ link_to('asignaturas/'.$item->id, 'Ver') }} </td>
                <td style="text-align: center;"> {{ link_to('asignaturas/'.$item->id.'/edit', 'Editar') }} </td>
                <td style="text-align: center;"> 
                    {{ Form::open(array('url' => 'asignaturas/'.$item->id)) }}
                        {{ Form::hidden("_method", "DELETE") }}
                       {{ Form::submit("Eliminar") }}
                   {{ Form::close() }}
                </td>
             </tr>
          @endforeach
          </tbody>
       </table>
    @else
       <p> No se han encontrado coordinadors </p>
    @endif
 </body>
</html>
@endsection