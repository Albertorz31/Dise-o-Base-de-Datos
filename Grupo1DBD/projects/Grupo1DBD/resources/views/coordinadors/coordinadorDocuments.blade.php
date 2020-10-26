@extends('coordinadors/layoutcoordinador')
@section('contenido') 
<!DOCTYPE html>
<html>
 <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title> Documentos </title>
 </head>
 <body>
    <h1> Documentos </h1>
    @if(Session::has('notice'))
       <p> <strong> {{ Session::get('notice') }} </strong> </p>
    @endif
    <p> {{ link_to ('coordinadors/coordinadorSave', 'Crear nuevo documento') }} </p>
    @if($documentos->count())
       <table style="border: solid 1px #000;">
          <thead>
          <tr>
             <th style="text-align: center;"> Nombre </th>
             <th style="text-align: center;"> Fecha </th>
             <th style="text-align: center;"> </th>
             <th style="text-align: center;"> Descargar </th>
          </tr>
          </thead>
          <tbody>
          @foreach($documentos as $item)
             <tr>
                <td style="text-align: center;"> {{ $item->nombre_documento }} </td>
                <td style="text-align: center;"> {{ $item->fecha }} </td>
                <td style="text-align: center;"> {{ link_to('documentos/'.$item->id.'/edit', 'Editar') }} </td>
                <td style="text-align: center;"><a class="boton" href="{{url('profesors/download/' .$item->contenido)}}">Descargar</a></td>
            </tr>
          @endforeach
          </tbody>
       </table>
    @else
       <p> No se han encontrado documento </p>
    @endif
 </body>
</html>
@endsection