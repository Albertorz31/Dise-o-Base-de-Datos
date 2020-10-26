<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MensajeEstudiante extends Model
{
    protected $fillable = [
        'envia',
        'id_mensaje',
        'id',
        'id_estudiante',
    ];
    public function estudiantes(){
        return $this->hasOne('App\Estudiante');
    }
    public function mensajes(){
        return $this->hasOne('App\Mensaje');
    }
}
