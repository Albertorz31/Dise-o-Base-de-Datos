<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MensajeProfesor extends Model
{
    protected $fillable = [
        'envia',
        'id_mensaje',
        'id',
        'id_profesor',
    ];
    public function profesors(){
        return $this->hasOne('App\Profesor');
    }
    public function mensajes(){
        return $this->hasOne('App\Mensaje');
    }
}
