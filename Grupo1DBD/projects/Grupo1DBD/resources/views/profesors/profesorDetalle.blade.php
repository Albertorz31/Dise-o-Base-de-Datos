@extends('profesors/layout')
@inject('controller', 'App\Http\Controllers\EstudianteController')
@section('contenido')
    <div class="container">
        <div>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th style="text-align: center;" scope="col">Información</th>
                        <th style="text-align: center;" scope="col">Valor</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="text-align: center;" scope="col">Nombre:</td>
                        <td style="text-align: center;">{{Auth::user()->nombre_profesor}}</td>
                    </tr>
                    <tr>
                        <td style="text-align: center;" scope="col">E-mail:</td>
                        <td style="text-align: center;">{{Auth::user()->email}}</td>
                    </tr>
                    <tr>
                        <td style="text-align: center;" scope="col">Telefono:</td> 
                        <td style="text-align: center;" scope="col">{{Auth::user()->telefono_profesor}}</td>
                    </tr>
                    <tr>
                        <td style="text-align: center;" scope="col">Especialidad:</td> 
                        <td style="text-align: center;" scope="col">{{Auth::user()->especialidad_profesor}}</td>
                    </tr>
                </tbody>
            </table>
            <a class="btn btn-primary" href="{{url('/profesors/'.Auth::user()->id. '/edit')}}">Editar</a>
        </div>
    </div>
@endsection