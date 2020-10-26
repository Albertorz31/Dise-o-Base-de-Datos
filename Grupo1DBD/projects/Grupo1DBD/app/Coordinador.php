<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Coordinador extends Authenticatable
{
    use Notifiable;
    protected $guard = 'coordinador';
    protected $fillable = [
        'nombre_coordinador',
        'password',
        'fecha_nacimiento_coordinador',
        'email',
        'telefono_coordinador',
        'tipo_coordinador',
        'id',
        'id_direccion', 
        
    ];

    public function direccions(){
    	return $this ->belongsTo('App\Direccion');
    }

    public function mallas()
	{
		return $this->belongsToMany('App\Malla');
	}

	public function mensajes(){
    	return $this ->hasMany('App\Mensaje');
    }
}
