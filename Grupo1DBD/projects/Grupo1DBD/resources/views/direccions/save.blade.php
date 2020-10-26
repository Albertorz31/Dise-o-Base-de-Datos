<!DOCTYPE html>
<html>
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <title> Guardar direccion </title>
 </head>
 <body>
    <h1> Guardar direccion </h1>
    {{ Form::open(array('url' => 'direccions/' . $direccion->id)) }}
       {{ Form::label ('id', 'ID') }}
       <br />
       {{ Form::text ('id', $direccion->id) }}
       <br />

       {{ Form::label ('comuna_direccion', 'Comuna') }}
       <br />
       {{ Form::text ('comuna_direccion', $direccion->comuna_direccion) }}
       <br />

       {{ Form::label ('calle_direccion', 'Calle') }}
       <br />
       {{ Form::text ('calle_direccion', $direccion->calle_direccion) }} 
       <br /> 

       {{ Form::label ('nombre_direccion', 'Nombre direccion') }}
       <br />
       {{ Form::text ('nombre_direccion', $direccion->nombre_direccion) }}
       <br />

       {{ Form::label ('numero_direccion', 'Numero') }}
       <br />
       {{ Form::text ('numero_direccion', $direccion->numero_direccion) }}
       <br />

       {{ Form::label ('region', 'Region') }}
       <br />
       {{ Form::text ('region', $direccion->region) }}
       <br />

       {{ Form::label ('pais', 'Pais') }}
       <br />
       {{ Form::text ('pais', $direccion->pais) }}
       <br />


       @if($direccion->id)
          {{ Form::hidden ('_method', 'PUT') }}
       @else
         
       @endif
       
       {{ Form::submit('Guardar direccion') }}
       {{ link_to('direccions', 'Cancelar') }}
    {{ Form::close() }}
 </body>
</html>