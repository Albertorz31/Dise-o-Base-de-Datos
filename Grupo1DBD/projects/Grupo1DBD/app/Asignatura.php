<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model
{
	protected $fillable = [
		'nombre_asignatura',
	    'nivel_asignatura',
	    'situacion_asignatura',
	    'id',
	    'id_malla',
	];

	public function mallas(){
		return $this ->belongsTo('App\Malla');
	}

	public function seccions(){
		return $this ->hasMany('App\Seccion');
	}

    //
}
