@extends('layout')
@extends('main')
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
    <p> {{ link_to ('documentos/create', 'Crear nuevo documento') }} </p>
    @if($documentos->count())
       <table class="table">
          <thead class="thead-dark">
          <tr>
             <th style="text-align: center;" scope="col"> Nombre </th>
             <th style="text-align: center;" scope="col"> Fecha </th>
             <th style="width: 50px; border-bottom: solid 1px #000;" scope="col"> </th>
             <th style="text-align: center;" scope="col"> Descargar </th>
          </tr>
          </thead>
          <tbody>
          @foreach($documentos as $item)
             <tr>
                <td style="text-align: center;"> {{ $item->nombre_documento }} </td>
                <td style="text-align: center;"> {{ $item->fecha }} </td>
                <td style="text-align: center;"> {{ link_to('documentos/'.$item->id.'/edit', 'Editar')}} </td>
                <td style="text-align: center;"><a  href="{{url('estudiantes/download/' .$item->contenido)}}" class="btn btn-warning"><i class="fas fa-file-download"></i>Descargar</a></td>
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