<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdministradorEstudiante extends Model
{
    protected $fillable = [
        'id',
        'id_administrador',
        'id_estudiante',
    ];
}
