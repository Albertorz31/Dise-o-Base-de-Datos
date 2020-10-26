@extends('layout')
@section('contenido') 
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title> Pago </title>
</head>
<body>
	<h1> Pagos realizados</h1> 
	@if(Session::has('notice'))
       <p> <strong> {{ Session::get('notice') }} </strong> </p>
    @endif
    @if($pago->count())
        <table class="table">
        	<thead class="thead-dark">
            <tr>
            	<th style="text-align: center;" scope="col"> Tipo de Pago </th>
                <th style="text-align: center;" scope="col"> Pagado </th>
                <th style="text-align: center;" scope="col"> Comprobante</th>
            </tr>
        	</thead>
        	<tbody>
        	@foreach($pago as $item)
        	    <tr>
        	    	<td style="text-align: center;"> {{ $item->tipo_pago}} </td>
	                <td style="text-align: center;"> {{ $item->pagado}} </td>
	                <td style="text-align: center;"> {{ $item->num_cuenta }} </td>
        	    </tr>
        	    <a href="{{url('estudiantes/estudianteNuevoPago/' .$item->id.'/' .$item->matricula)}}" class="btn btn-info"> Realizar Pago </a></td>
        	@endforeach
        	</tbody>
        </table>

    @else
        <p> No se han encontrado pagos</p>
    @endif
</body>
</html>
@endsection