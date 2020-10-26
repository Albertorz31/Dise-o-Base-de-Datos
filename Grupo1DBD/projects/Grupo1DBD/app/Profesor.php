<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Profesor extends Authenticatable
{
    use Notifiable;
    protected $guard = 'profesor';
    protected $fillable = [
        'nombre_profesor',
        'password',
        'fecha_nacimiento_profesor',
        'email',
        'telefono_profesor',
        'asignaturas_impartidas',
        'especialidad_profesor',
        'id',
        'id_direccion',

    ];

    public function direccions(){
    	return $this ->belongsTo('App\Direccion');
    }

    public function administradors()
	{
		return $this->belongsToMany('App\Administrador');
	}

  public function seccions()
{
  return $this->belongsToMany('App\Seccion');
}

	public function mensajes(){
    	return $this ->hasMany('App\Mensaje');
    }
}
