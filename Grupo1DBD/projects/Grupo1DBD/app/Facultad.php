<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facultad extends Model
{
	protected $fillable = [
	    'nombre_facultad',
	    'numero_carreras',
	    'numero_estudiantes',
	    'id',
	];

	public function carreras(){
		return $this ->hasMany('App\Carrera');
	}
    
}
