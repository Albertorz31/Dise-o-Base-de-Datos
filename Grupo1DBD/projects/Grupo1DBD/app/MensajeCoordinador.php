<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MensajeCoordinador extends Model
{
    protected $fillable = [
        'envia',
        'id_mensaje',
        'id',
        'id_coordinador',
    ];
    public function coordinadors(){
        return $this->hasOne('App\Coordinador');
    }
    public function mensajes(){
        return $this->hasOne('App\Mensaje');
    }
}
