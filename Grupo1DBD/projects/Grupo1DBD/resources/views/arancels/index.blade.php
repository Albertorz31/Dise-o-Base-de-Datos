@extends('administradors/layoutadmin')
@section('contenido') 
<!DOCTYPE html>
<html>
 <head>
 	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title> Aranceles </title>
 </head>
 <body>
    <h1> Aranceles </h1>
    @if(Session::has('notice'))
       <p> <strong> {{ Session::get('notice') }} </strong> </p>
    @endif
    <p> {{ link_to ('arancels/create', 'Crear nuevo arancel') }} </p>
    @if($arancels->count())
       <table class="table">
          <thead class="thead-dark">
          <tr>
             <th style="text-align: center;" scope="col"> Fecha Vencimiento de arancel </th>
             <th style="text-align: center;" scope="col"> Monto </th>
             <th style="text-align: center;" scope="col"> Semestre </th>
             <th style="text-align: center;" scope="col"> </th>
             <th style="text-align: center;" scope="col"> </th>
             <th style="text-align: center;" scope="col"> </th>
          </tr>
          </thead>
          <tbody>
          @foreach($arancels as $item)
             <tr>
                <td style="text-align: center;"> {{ $item->fecha_vencimiento_arancel }} </td>
                <td style="text-align: center;"> {{ $item->monto_arancel}} </td>
                <td style="text-align: center;"> {{ $item->semestre_arancel }} </td>
                <td style="text-align: center;"> {{ link_to('arancels/'.$item->id, 'Ver') }} </td>
                <td style="text-align: center;"> {{ link_to('arancels/'.$item->id.'/edit', 'Editar') }} </td>
                <td style="text-align: center;"> 
                    {{ Form::open(array('url' => 'arancels/'.$item->id)) }}
                        {{ Form::hidden("_method", "DELETE") }}
                       {{ Form::submit("Eliminar") }}
                   {{ Form::close() }}
                </td>
             </tr>
          @endforeach
          </tbody>
       </table>
    @else
       <p> No se han encontrado arancels </p>
    @endif
 </body>
</html>
@endsection