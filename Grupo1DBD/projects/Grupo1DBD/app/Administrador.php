<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Administrador extends Authenticatable
{

    use Notifiable;

    protected $guard ='admin';
    

    protected $fillable = [
        'nombre_administrador',
        'fecha_nacimiento_administrador',
        'email',
        'password',
        'telefono_adminstrador',
        'id',
        'id_direccion',
    ];

    public function direccions(){
    	return $this ->belongsTo('App\Direccion');
    }

    public function profesors()
	{
		return $this->belongsToMany('App\Profesor');
	}

  public function estudiantes()
  {
  return $this->belongsToMany('App\Estudiante');
  }

	public function mensajes(){
    	return $this ->hasMany('App\Mensaje');
    }
}
