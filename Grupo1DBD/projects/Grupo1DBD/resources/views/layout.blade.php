<link href="https://fonts.googleapis.com/css?family=Righteous|Staatliches" rel="stylesheet">
<link href="{{ URL::asset('css/estilo.css') }}" rel="stylesheet">
<!DOCTYPE html>
<html style="max-height: 20%">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

        <title>SITIO</title>
    </head>
<body style="max-height: 20%">
        <ul>
            <li class="dropdown">
            <a href="javascript:void(0)" class="dropdown">Inicio</a>
                <div class="dropdown-content dropdown-content-normal">
                <a class="boton" href="{{url('/estudiantes/estudianteHome')}}">Avisos</a>
                <a class="boton" href="{{url('/estudiantes/estudianteDetalle')}}">Datos Personales</a>
                </div>
            </li>
            <li class="dropdown">
                <a href="javascript:void(0)" class="dropbtn">Mi Carrera</a>
                <div class="dropdown-content dropdown-content-normal">
                <a class="boton" href="{{url('/estudiantes/estudianteDetalleCurricular')}}">Datos Curriculares</a>
                <a class="boton" href="{{url('/estudiantes/estudianteMalla')}}">Malla</a>
                <a class="boton" href="{{url('/estudiantes/estudianteCalificaciones/' .Auth::user()->id)}}">Calificaciones</a>
                </div>
            </li>
             <li class="dropdown">
            <a href="javascript:void(0)" class="dropbtn">Mis Cursos</a>
                <div class="dropdown-content dropdown-content-normal">
                <a class="boton" href="{{url('/estudiantes/estudianteHorario/' .Auth::user()->id)}}">Horario</a>
                <a class="boton" href="{{url('/')}}">Cursos Actuales</a>
                </div>
            </li>
            <li class="dropdown">
            <a href="javascript:void(0)" class="dropbtn">Proceso</a>
                <div class="dropdown-content dropdown-content-normal">
                <a class="boton" href="{{url('/estudiantes/estudianteInscribir/'.Auth::user()->id)}}">Inscribir</a>
                <a class="boton" href="{{url('/estudiantes/estudianteDesinscribir/' .Auth::user()->id)}}">Desinscribir</a>
                </div>
            </li>
            <li class="dropdown">
            <a href="javascript:void(0)" class="dropbtn">Mensajes</a>
                <div class="dropdown-content dropdown-content-normal">
                <a class="boton" href="{{url('/estudiantes/estudianteMensajeEscribir/' .Auth::user()->id) .'/0'}}">Redactar a Estud.</a>
                    <a class="boton" href="{{url('/estudiantes/estudianteMensajeEscribir/' .Auth::user()->id).'/1'}}">Redactar a Prof.</a>
                    <a class="boton" href="{{url('/estudiantes/estudianteMensajeEscribir/' .Auth::user()->id).'/2'}}">Redactar a Coord.</a>
                <a class="boton" href="{{url('/estudiantes/estudianteMensajeRecibido/' .Auth::user()->id)}}">Recibidos</a>
                <a class="boton" href="{{url('/estudiantes/estudianteMensajeEnviado/' .Auth::user()->id)}}">Enviados</a>

                </div>
            </li>
            <li class="dropdown">
            <a href="javascript:void(0)" class="dropbtn">Documentos</a>
                <div class="dropdown-content dropdown-content-normal">
                <a class="boton" href="{{url('/documentos')}}">Descargar</a>
                <a class="boton" href="{{url('/pagos/mostrarEstudiante/4' )}}">Comprobantes</a>
                </div>
            </li>

            <li class="dropdown">
            <a href="javascript:void(0)" class="dropbtn">Pagos</a>
                <div class="dropdown-content dropdown-content-normal">
                <a class="boton" href="{{url('/pagos')}}">Pagar</a>
                </div>
            </li>
            @guest

            @else
                @if(auth()->user()->email ==  'dbdusach@gmail.com')
                    <li style="float:right;"><a href="administrar">Administrar web</a></li>
                @endif
                <li style="float:right;"><a href="{{ route('logout')}}">Salir</a></li>

            @endguest
        </ul>
    @yield('contenido')
</body>

    <footer>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    </footer>
</html>
