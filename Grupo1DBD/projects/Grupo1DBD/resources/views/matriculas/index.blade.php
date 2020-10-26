@extends('administradors/layoutadmin')
@section('contenido') 
<!DOCTYPE html>
<html>
 <head>
 	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title> Matriculas </title>
 </head>
 <body>
    <h1> Matriculas </h1>
    @if(Session::has('notice'))
       <p> <strong> {{ Session::get('notice') }} </strong> </p>
    @endif
    <p> {{ link_to ('matriculas/create', 'Crear nueva matricula') }} </p>
    @if($matriculas->count())
       <table class="table">
          <thead class="thead-dark">
          <tr>
             <th style="text-align: center;" scope="col"> Fecha Vencimiento de matricula </th>
             <th style="text-align: center;" scope="col"> Monto </th>
             <th style="text-align: center;" scope="col"> Semestre </th>
             <th style="text-align: center;" scope="col"> </th>
             <th style="text-align: center;" scope="col"> </th>
             <th style="text-align: center;" scope="col"> </th>
          </tr>
          </thead>
          <tbody>
          @foreach($matriculas as $item)
             <tr>
                <td style="text-align: center;"> {{ $item->fecha_vencimiento_matricula }} </td>
                <td style="text-align: center;"> {{ $item->monto_matricula}} </td>
                <td style="text-align: center;"> {{ $item->semestre_matricula }} </td>
                <td style="text-align: center;"> {{ link_to('matriculas/'.$item->id, 'Ver') }} </td>
                <td style="text-align: center;"> {{ link_to('matriculas/'.$item->id.'/edit', 'Editar') }} </td>
                <td style="text-align: center;"> 
                    {{ Form::open(array('url' => 'matriculas/'.$item->id)) }}
                        {{ Form::hidden("_method", "DELETE") }}
                       {{ Form::submit("Eliminar") }}
                   {{ Form::close() }}
                </td>
             </tr>
          @endforeach
          </tbody>
       </table>
    @else
       <p> No se han encontrado matriculas </p>
    @endif
 </body>
</html>
@endsection