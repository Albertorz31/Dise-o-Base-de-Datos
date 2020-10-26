<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matricula extends Model
{
    protected $fillable = [
	    'semestre_matricula',
	    'montro_matricula',
	    'fecha_vencimiento_matricula',
		'id',
		'id_pago',
		'id_historial_de_pago',
	];

	public function pagos(){
		return $this ->belongsTo('App\Pago');
	}
	public function historial_de_pagos(){
		return $this ->belongsTo('App\HistorialDePago');
	}
}
