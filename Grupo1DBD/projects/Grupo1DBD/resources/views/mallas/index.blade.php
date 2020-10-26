@extends('administradors/layoutadmin')
@section('contenido') 
<!DOCTYPE html>
<html>
 <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title> Mallas </title>
 </head>
 <body>
    <h1> Mallas </h1>
    @if(Session::has('notice'))
       <p> <strong> {{ Session::get('notice') }} </strong> </p>
    @endif
    <p> {{ link_to ('mallas/create', 'Crear nueva malla') }} </p>
    @if($mallas->count())
       <table class="table">
          <thead class="thead-dark">
          <tr>
             <th style="text-align: center;" scope="col"> Total asignaturas </th>
             <th style="text-align: center;" scope="col"> cantidad_semestres </th>
             <th style="text-align: center;" scope="col"> </th>
             <th style="text-align: center;" scope="col"> </th>
             <th style="text-align: center;" scope="col"> </th>
          </tr>
          </thead>
          <tbody>
          @foreach($mallas as $item)
             <tr>
                <td style="text-align: center;"> {{ $item->total_asignaturas }} </td>
                <td style="text-align: center;"> {{ $item->cantidad_semestres }} </td>
                <td style="text-align: center;"> {{ link_to('mallas/'.$item->id, 'Ver') }} </td>
                <td style="text-align: center;"> {{ link_to('mallas/'.$item->id.'/edit', 'Editar') }} </td>
                <td style="text-align: center;"> 
                    {{ Form::open(array('url' => 'mallas/'.$item->id)) }}
                        {{ Form::hidden("_method", "DELETE") }}
                       {{ Form::submit("Eliminar") }}
                   {{ Form::close() }}
                </td>
             </tr>
          @endforeach
          </tbody>
       </table>
    @else
       <p> No se han encontrado mallas </p>
    @endif
 </body>
</html>
@endsection