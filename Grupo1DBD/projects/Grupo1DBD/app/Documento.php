<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    protected $fillable = [
        'nombre_documento',
        'contenido',
        'fecha',
        'id',
        'id_seccion',

    ];

    public function seccions(){
    	return $this ->belongsTo('App\Seccion');
    }


    
}
