@extends('layout')
@section('contenido') 
<!DOCTYPE html>
<html>
 <head>
 	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title> Historial de Pago </title>
 </head>
 <body>
    <h1> Historial de Pago </h1>
    @if(Session::has('notice'))
       <p> <strong> {{ Session::get('notice') }} </strong> </p>
    @endif
    <p> {{ link_to ('historial_de_pagos/create', 'Crear nuevo historial de pago') }} </p>
    @if($historial_de_pagos->count())
       <table style="border: solid 1px #000;">
          <thead>
          <tr>
             <th style="width: 200px; border-bottom: solid 1px #000;"> Fecha de Pago</th>
             <th style="width: 200px; border-bottom: solid 1px #000;"> Monto </th>
             <th style="width: 50px; border-bottom: solid 1px #000;"> </th>
             <th style="width: 50px; border-bottom: solid 1px #000;"> </th>
             <th style="width: 50px; border-bottom: solid 1px #000;"> </th>
          </tr>
          </thead>
          <tbody>
          @foreach($historial_de_pagos as $item)
             <tr>
                <td style="text-align: center;"> {{ $item->fecha_pago }} </td>
                <td style="text-align: center;"> {{ $item->monto_pago}} </td>
                <td style="text-align: center;"> {{ link_to('historial_de_pagos/'.$item->id, 'Ver') }} </td>
                <td style="text-align: center;"> {{ link_to('historial_de_pagos/'.$item->id.'/edit', 'Editar') }} </td>
                <td style="text-align: center;"> 
                    {{ Form::open(array('url' => 'historial_de_pagos/'.$item->id)) }}
                        {{ Form::hidden("_method", "DELETE") }}
                       {{ Form::submit("Eliminar") }}
                   {{ Form::close() }}
                </td>
             </tr>
          @endforeach
          </tbody>
       </table>
    @else
       <p> No se han encontrado historial_de_pagos </p>
    @endif
 </body>
</html>
@endsection