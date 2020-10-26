<!DOCTYPE html>
<html>
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <title> Guardar carrera </title>
 </head>
 <body>
    <h1> Guardar carrera </h1>
    {{ Form::open(array('url' => 'carreras/' . $carrera->id)) }}

       {{ Form::label ('id', 'ID') }}
       <br />
       {{ Form::text ('id', $carrera->id) }}
       <br />

       {{ Form::label ('nombre_carrera', 'Nombre carrera') }}
       <br />
       {{ Form::text ('nombre_carrera', $carrera->nombre_carrera) }}
       <br />

       {{ Form::label ('duracion_semestres', 'Duracion semestres') }}
       <br />
       {{ Form::text ('duracion_semestres', $carrera->duracion_semestres) }} 
       <br /> 

       {{ Form::label ('jornada', 'Jornada') }}
       <br />
       {{ Form::text ('jornada', $carrera->jornada) }}
       <br />

       {{ Form::label ('arancel', 'Arancel') }}
       <br />
       {{ Form::text ('arancel', $carrera->arancel) }}
       <br />

       {{ Form::label ('grado_academico', 'Grado academico') }}
       <br />
       {{ Form::text ('grado_academico', $carrera->grado_academico) }}
       <br />

       {{ Form::label ('titulo_profesional', 'Titulo profesional') }}
       <br />
       {{ Form::text ('titulo_profesional', $carrera->titulo_profesional) }}
       <br />

       {{ Form::label ('acreditacion', 'Acreditacion') }}
       <br />
       {{ Form::text ('acreditacion', $carrera->acreditacion) }}
       <br />

       {{ Form::label ('numero_estudiantes', 'Numero estudiantes ') }}
       <br />
       {{ Form::text ('numero_estudiantes', $carrera->numero_estudiantes) }}
       <br />

       {{ Form::label ('id_facultad', 'ID facultad') }}
       <br />
       {{ Form::text ('id_facultad', $carrera->id_facultad) }}
       <br />

       {{ Form::label ('id_malla', 'ID malla') }}
       <br />
       {{ Form::text ('id_malla', $carrera->id_malla) }}
       <br />


       @if($carrera->id)
          {{ Form::hidden ('_method', 'PUT') }}
       @else
         
       @endif
       
       {{ Form::submit('Guardar carrera') }}
       {{ link_to('carreras', 'Cancelar') }}
    {{ Form::close() }}
 </body>
</html>