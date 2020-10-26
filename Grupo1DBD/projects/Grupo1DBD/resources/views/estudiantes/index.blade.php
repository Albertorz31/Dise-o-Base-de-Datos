@extends('administradors/layoutadmin')
@section('contenido') 
<!DOCTYPE html>
<html>
 <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title> Estudiantes </title>
 </head>
 <body>
    <h1> Estudiantes </h1>
    @if(Session::has('notice'))
       <p> <strong> {{ Session::get('notice') }} </strong> </p>
    @endif
    <p> {{ link_to ('estudiantes/create', 'Crear nuevo estudiante') }} </p>
    @if($estudiantes->count())
       <table class="table">
          <thead class="thead-dark">
          <tr>
             <th style="text-align: center;" scope="col"> Nombre </th>
             <th style="text-align: center;" scope="col"> Fecha de nacimiento </th>
             <th style="text-align: center;" scope="col"> Correo </th>
             <th style="text-align: center;" scope="col"> Telefono </th>
             <th style="text-align: center;" scope="col"> Asignaturas aprobadas </th>
             <th style="text-align: center;" scope="col"> Situacion estudiante </th>
             <th style="text-align: center;" scope="col"> Nivel estudiante </th>
             <th style="text-align: center;" scope="col"> Fecha ingreso </th>
             <th style="text-align: center;" scope="col"> Ultima matricula </th>
             <th style="text-align: center;" scope="col"> </th>
             <th style="text-align: center;" scope="col"> </th>
             <th style="text-align: center;" scope="col"> </th>
          </tr>
          </thead>
          <tbody>
          @foreach($estudiantes as $item)
             <tr>
                <td style="text-align: center;"> {{ $item->nombre_estudiante }} </td>
                <td style="text-align: center;"> {{ $item->fecha_nacimiento_estudiante }} </td>
                <td style="text-align: center;"> {{ $item->email }} </td>
                <td style="text-align: center;"> {{ $item->telefono_estudiante }} </td>
                <td style="text-align: center;"> {{ $item->asignaturas_aprobadas }} </td>
                <td style="text-align: center;"> {{ $item->situacion_estudiante }} </td>
                <td style="text-align: center;"> {{ $item->nivel_estudiante }} </td>
                <td style="text-align: center;"> {{ $item->fecha_ingreso }} </td>
                <td style="text-align: center;"> {{ $item->ultima_matricula }} </td>
                <td style="text-align: center;"> {{ link_to('estudiantes/'.$item->id, 'Ver') }} </td>
                <td style="text-align: center;"> {{ link_to('estudiantes/'.$item->id.'/edit', 'Editar') }} </td>
                <td style="text-align: center;">
                    {{ Form::open(array('url' => 'estudiantes/'.$item->id)) }}
                        {{ Form::hidden("_method", "DELETE") }}
                       {{ Form::submit("Eliminar") }}
                   {{ Form::close() }}
                </td>
             </tr>
          @endforeach
          </tbody>
       </table>
    @else
       <p> No se han encontrado estudiante </p>
    @endif
 </body>
</html>
@endsection