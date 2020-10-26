<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    protected $fillable = [
        'nombre_carrera', 
        'duracion_semestres',
        'jornada',
        'arancel',
        'grado_academico',
        'titulo_profesional',
        'acreditacion',
        'numero_estudiantes',
        'id',
        'id_facultad',
        'id_malla',
    ];

    public function mallas(){
        return $this ->hasOne('App\Malla');
    }

    public function facultads(){
        return $this ->belongsTo('App\Facultad');
    }

    public function estudiantes(){
        return $this ->hasMany('App\Estudiante');
    }

}
