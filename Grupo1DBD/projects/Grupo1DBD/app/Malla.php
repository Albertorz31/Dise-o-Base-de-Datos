<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Malla extends Model
{
    protected $fillable = [
        'total_asignaturas',
        'cantidad_semestres',
        'id',
    ];

    public function carreras(){
    	return $this ->belongsTo('App\Carrera');
    }

    public function coordinadors()
	{
		return $this->belongsToMany('App\Coordinador');
	}

	public function asignaturas(){
    	return $this ->hasMany('App\Asignatura');
    }
}
