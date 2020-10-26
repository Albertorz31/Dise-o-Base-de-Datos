@extends('administradors/layoutadmin')
@section('contenido') 

<!DOCTYPE html>
<html>
 <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title> Profesores </title>
 </head>
 <body>
    <h1> Profesores </h1>
    @if(Session::has('notice'))
       <p> <strong> {{ Session::get('notice') }} </strong> </p>
    @endif
    <p> {{ link_to ('profesors/create', 'Crear nuevo profesor') }} </p>
    @if($profesors->count())
       <table class="table">
          <thead class="thead-dark">
          <tr>
             <th style="text-align: center;" scope="col"> Nombre </th>
             <th style="text-align: center;" scope="col"> Fecha de nacimiento </th>
             <th style="text-align: center;" scope="col"> Correo </th>
             <th style="text-align: center;" scope="col"> Telefono </th>
             <th style="text-align: center;" scope="col"> Asignaturas impartidas </th>
             <th style="text-align: center;" scope="col"> Especialidad profesor </th>
             <th style="text-align: center;" scope="col"> </th>
             <th style="text-align: center;" scope="col"> </th>
             <th style="text-align: center;" scope="col"> </th>
          </tr>
          </thead>
          <tbody>
          @foreach($profesors as $item)
             <tr>
                <td style="text-align: center;"> {{ $item->nombre_profesor }} </td>
                <td style="text-align: center;"> {{ $item->fecha_nacimiento_profesor }} </td>
                <td style="text-align: center;"> {{ $item->email }} </td>
                <td style="text-align: center;"> {{ $item->telefono_profesor }} </td>
                <td style="text-align: center;"> {{ $item->asignaturas_impartidas }} </td>
                <td style="text-align: center;"> {{ $item->especialidad_profesor }} </td>
                <td style="text-align: center;"> {{ link_to('profesors/'.$item->id, 'Ver') }} </td>
                <td style="text-align: center;"> {{ link_to('profesors/'.$item->id.'/edit', 'Editar') }} </td>
                <td style="text-align: center;">
                    {{ Form::open(array('url' => 'profesors/'.$item->id)) }}
                        {{ Form::hidden("_method", "DELETE") }}
                       {{ Form::submit("Eliminar") }}
                   {{ Form::close() }}
                </td>
             </tr>
          @endforeach
          </tbody>
       </table>
    @else
       <p> No se han encontrado profesor </p>
    @endif
 </body>
</html>
@endsection