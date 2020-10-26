<link href="https://fonts.googleapis.com/css?family=Righteous|Staatliches" rel="stylesheet">
<link href="{{ URL::asset('css/estilo.css')}}" rel="stylesheet">

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <link href="{{ URL::asset('css/estilo.css')}}" rel="stylesheet">    
        <title>SITIO</title>
    </head>
<body>

        <ul>
            
            <li class="dropdown">
            <a href="javascript:void(0)" class="dropdown">Inicio</a>
                <div class="dropdown-content dropdown-content-normal">
                <a class="boton" href="{{url('/')}}">Avisos</a>
                <a class="boton" href="{{url('/administradors/administradorDetalle')}}">Datos Personales</a>
                </div>
            </li>
            <li class="dropdown">
                <a href="javascript:void(0)" class="dropbtn">Administrador General</a>
                <div class="dropdown-content dropdown-content-normal">
                <a class="boton" href="{{url('/administrar')}}">Administrar</a>

                </div>
            </li>
             <li class="dropdown">
            <a href="javascript:void(0)" class="dropbtn">Administrar Usuarios</a>
                <div class="dropdown-content dropdown-content-normal">
                <a class="boton" href="{{url('/estudiantes')}}">Estudiantes</a>
                <a class="boton" href="{{url('/profesors')}}">Profesores</a>
                <a class="boton" href="{{url('/coordinadors')}}">Coordinadores</a>
                </div>
            </li>
            <li class="dropdown">
            <a href="javascript:void(0)" class="dropbtn">Mensajes</a>
                <div class="dropdown-content dropdown-content-normal">
                <a class="boton" href="{{url('/')}}">Redactar</a>
                <a class="boton" href="{{url('/')}}">Recibidos</a>
                <a class="boton" href="{{url('/')}}">Enviados</a>

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