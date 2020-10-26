@extends('layout')
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
                        <td style="text-align: center;">{{Auth::user()->nombre_estudiante}}</td>
                    </tr>
                    <tr>
                        <td style="text-align: center;" scope="col">E-mail:</td>
                        <td style="text-align: center;">{{Auth::user()->email}}</td>
                    </tr>
                    <tr>
                        <td style="text-align: center;" scope="col">Telefono:</td> 
                        <td style="text-align: center;" scope="col">{{Auth::user()->telefono_estudiante}}</td>
                    </tr>
                </tbody>
            </table>
            <a class="btn btn-primary" href="{{url('/estudiantes/'.Auth::user()->id. '/edit')}}">Editar</a>
        </div>
    </div>
@endsection