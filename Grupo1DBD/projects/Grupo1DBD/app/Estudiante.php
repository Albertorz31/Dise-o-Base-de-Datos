<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Estudiante extends Authenticatable
{
    use Notifiable;

    protected $guard = 'estudiante';

    protected $fillable = [
        'nombre_estudiante',
        'password',
        'fecha_nacimiento_estudiante',
        'email',
        'telefono_estudiante',
        'asignaturas_aprobadas',
        'situacion_estudiante',
        'nivel_estudiante',
        'fecha_ingreso',
        'matricula',
        'id',
        'id_carrera',
        'id_direccion',

    ];

    public function direccions(){
    	return $this ->belongsTo('App\Direccion');
    }

    public function carreras(){
    	return $this ->belongsTo('App\Carrera');
    }

    public function administradors()
	{
		return $this->belongsToMany('App\Administrador');
	}

    public function pagos()
    {
        return $this->hasMany('App\Pago');
    }

    public function utilidads()
    {
        return $this->belongsToMany('App\Utilidad');
    }

    public function mensajes(){
        return $this ->hasMany('App\Mensaje');
    }
}
