<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seccion extends Model
{
	protected $fillable = [
	    'tipo_seccion',
	    'sala',
	    'modulo',
	    'id',
        'id_asignatura',
        'id_horario',
	];

	public function asignaturas(){
		return $this ->belongsTo('App\Asignatura');
	}

    public function horarios(){
    	return $this ->hasOne('App\Horario');
    }

    public function documentos(){
    	return $this ->hasMany('App\Documento');
    }
}
