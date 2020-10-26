@extends('coordinadors/layoutcoordinador')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Inicio de Coordinador</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Bienvenido Coordinador, su numero de telefono es:  {{ Auth::user()->telefono_coordinador }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection