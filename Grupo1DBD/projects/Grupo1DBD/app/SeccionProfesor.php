<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SeccionProfesor extends Model
{
    protected $fillable = [
        'id_profesor',
        'id_seccion',
        'semestre',
    ];
    
    public function seccions(){
		return $this ->hasMany('App\Seccion');
	}

    public function profesors(){
    	return $this ->hasMany('App\Profesor');
    }
}
