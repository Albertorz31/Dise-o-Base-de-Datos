<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SeccionEstudiante extends Model
{
    protected $fillable = [
        'id_estudiante',
        'id_seccion',
        'semestre',
        'cursando',
        'aprobado',
        'calificacion_catedra',
        'calificacion_laboratorio',
        'calificacion_final',
    ];
    
    public function seccions(){
		return $this ->hasMany('App\Seccion');
	}

    public function estudiantes(){
    	return $this ->hasMany('App\Estudiante');
    }
}
