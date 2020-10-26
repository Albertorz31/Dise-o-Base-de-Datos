@extends('coordinadors/layoutcoordinador')
@extends('main')
@section('contenido') 
<!DOCTYPE html>
<html>
 <head>
 	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title> Horarios </title>
 </head>
 <body>
    <h1> Horarios </h1>
    @if(Session::has('notice'))
       <p> <strong> {{ Session::get('notice') }} </strong> </p>
    @endif
    <p> {{ link_to ('horarios/create', 'Crear nuevo Horario') }} </p>
    @if($horarios->count())
       <table  class="table">
          <thead class="thead-dark">
          <tr>
             <th style="text-align: center;" scope="col"> Dia </th>
             <th style="text-align: center;" scope="col"> Módulo </th>
             <th style="text-align: center;" scope="col"> </th>
             <th style="text-align: center;" scope="col"> </th>
             <th style="text-align: center;" scope="col"> </th>
          </tr>
          </thead>
          <tbody>
          @foreach($horarios as $item)
             <tr>
                <td style="text-align: center;"> {{ $item->dia}} </td>
                <td style="text-align: center;"> {{ $item->modulo }} </td>
                <td style="text-align: center;"> {{ link_to('horarios/'.$item->id, 'Ver') }} </td>
                <td style="text-align: center;"> {{ link_to('horarios/'.$item->id.'/edit', 'Editar') }} </td>
                <td style="text-align: center;"> 
                    {{ Form::open(array('url' => 'horarios/'.$item->id)) }}
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