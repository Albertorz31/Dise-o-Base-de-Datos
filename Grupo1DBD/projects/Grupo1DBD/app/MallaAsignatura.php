<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MallaAsignatura extends Model
{
    protected $fillable = [
        'id',
        'id_malla',
        'id_asignatura',
    ];
    public function mallas(){
        return $this ->belongsTo('App\Malla');
    }
    public function asignaturas(){
        return $this ->belongsTo('App\Asignatura');
    }
}
