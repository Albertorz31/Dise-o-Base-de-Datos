<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Utilidad extends Model
{
    protected $fillable = [
        'documentos_disponibles',
        'certificados_disponibles',
        'solicitudes_enviadas',
        'id',
        'id_estudiante',

    ];

    public function estudiantes(){
    	return $this ->belongsTo('App\Estudiante');
    }

}
