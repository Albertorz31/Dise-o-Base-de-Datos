<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
    protected $fillable = [
        'comuna_direccion',
        'calle_direccion',
        'nombre_direccion',
        'numero_direccion',
        'region',
        'pais',
        'id',

    ];

    public function coordinadors(){
    	return $this ->hasOne('App\Coordinador');
    }

    public function estudiantes(){
    	return $this ->hasOne('App\Estudiante');
    }

    public function profesors(){
    	return $this ->hasOne('App\Profesor');
    }

    public function administrador(){
    	return $this ->hasOne('App\Administrador');
    }

    //FALTA RELACION EN PROFESOR, ADMINISTRADOR Y ESTUDIANTE
}
