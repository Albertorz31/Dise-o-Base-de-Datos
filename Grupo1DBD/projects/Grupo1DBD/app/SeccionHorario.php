<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SeccionHorario extends Model
{
    protected $fillable = [
        'id',
        'id_seccion',
        'id_horario',
        'sala'
    ];
}
