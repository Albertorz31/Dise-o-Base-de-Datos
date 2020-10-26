<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MensajeAdministrador extends Model
{
    protected $fillable = [
        'envia',
        'id_mensaje',
        'id',
        'id_administrador',
    ];
    public function administradors(){
        return $this->hasOne('App\Administrador');
    }
    public function mensajes(){
        return $this->hasOne('App\Mensaje');
    }
}
