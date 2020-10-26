<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mensaje extends Model
{
    protected $fillable = [
        'texto',
        'hora_envio',
        'fecha_envio',
        'envia',
        'encabezado',
        'id',
        'id_administrador',
        'id_estudiante',
        'id_coordinador',
        'id_profesor',
        
    ];

    public function mensaje_estudiantes(){
    	return $this ->hasMany('App\MensajeEstudiante');
    }

    public function mensaje_profesors(){
    	return $this ->hasMany('App\MensajeProfesor');
    }

    public function mensaje_coordinadors(){
    	return $this ->hasMany('App\MensajeCoordinador');
    }

    public function mensaje_administradors(){
    	return $this ->hasMany('App\MensajeAdministrador');
    }

    //FALTA RELACION EN ADMINISTRADOR, ESTUDIANTE Y PROFESOR
}
