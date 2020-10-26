@extends('coordinadors/layoutcoordinador')
@extends('main')
@section('contenido') 
<!DOCTYPE html>
<html>
 <head>
 	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title> Secciones </title>
 </head>
 <body>
    <h1> Secciones </h1>
    @if(Session::has('notice'))
       <p> <strong> {{ Session::get('notice') }} </strong> </p>
    @endif
    <p> {{ link_to ('seccions/create', 'Crear nueva sección') }} </p>
    @if($seccions->count())
       <table class="table">
          <thead class="thead-dark">
          <tr>
             <th style="text-align: center;" scope="col"> Tipo de sección </th>
             <th style="text-align: center;" scope="col"> Sala </th>
             <th style="text-align: center;" scope="col"> Módulo </th>
             <th style="text-align: center;" scope="col"> </th>
             <th style="text-align: center;" scope="col"> </th>
             <th style="text-align: center;" scope="col"> </th>
          </tr>
          </thead>
          <tbody>
          @foreach($seccions as $item)
             <tr>
                <td style="text-align: center;"> {{ $item->tipo_seccion }} </td>
                <td style="text-align: center;"> {{ $item->sala}} </td>
                <td style="text-align: center;"> {{ $item->modulo }} </td>
                <td style="text-align: center;"> {{ link_to('seccions/'.$item->id, 'Ver') }} </td>
                <td style="text-align: center;"> {{ link_to('seccions/'.$item->id.'/edit', 'Editar') }} </td>
                <td style="text-align: center;"> 
                    {{ Form::open(array('url' => 'seccions/'.$item->id)) }}
                        {{ Form::hidden("_method", "DELETE") }}
                       {{ Form::submit("Eliminar") }}
                   {{ Form::close() }}
                </td>
             </tr>
          @endforeach
          </tbody>
       </table>
    @else
       <p> No se han encontrado Seccion </p>
    @endif
 </body>
</html>
@endsection