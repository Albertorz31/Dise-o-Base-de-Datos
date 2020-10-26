@extends('layout')
@inject('controller', 'App\Http\Controllers\EstudianteController')
@section('contenido')
    <div class="container">
        <div>
            <table>
                <tr>
                    <th>Nombre</th><th>Valor</th>
                </tr>
                <tr>
                    <td>Situación:</td> <td><input type="text" name="email" value={{Auth::user()->situacion_estudiante}} readonly></td>
                </tr>
                <tr>
                    <td>Nivel Actual:</td> <td><input type="text" name="telefono" value={{Auth::user()->nivel_estudiante}} readonly></td>
                </tr>
                <tr>
                    <td>Asignaturas Aprobadas:</td> <td><input type="text" name="email" value={{Auth::user()->asignaturas_aprobadas}} readonly></td>
                </tr>
                <tr>
                    <td>Fecha ingreso:</td> <td><input type="text" name="email" value={{Auth::user()->fecha_ingreso}} readonly></td>
                </tr>
                <tr>
                    <td>Fecha ultima matricula:</td> <td><input type="text" name="email" value={{Auth::user()->ultima_matricula}} readonly></td>
                </tr>

            </table>

        </div>
    </div>
@endsection