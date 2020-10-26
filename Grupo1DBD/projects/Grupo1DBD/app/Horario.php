<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
	protected $fillable =[
		'dia',
		'modulo',
		'id',
	];

	public function secccions(){
		return $this ->belongsTo('App\Seccion');
	}
    //
}
