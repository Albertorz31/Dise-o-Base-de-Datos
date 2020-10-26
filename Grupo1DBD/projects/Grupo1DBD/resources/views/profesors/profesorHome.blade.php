@extends('profesors/layout')
@section('contenido')
<div class="container">
    <div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Inicio de Profesor</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    Bienvenido Profesor, su número de id es:  {{ Auth::user()->id}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection