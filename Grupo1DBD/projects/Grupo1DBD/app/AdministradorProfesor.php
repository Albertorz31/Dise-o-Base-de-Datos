<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdministradorProfesor extends Model
{
    protected $fillable = [
        'id',
        'id_administrador',
        'id_profesor',
    ];

}

