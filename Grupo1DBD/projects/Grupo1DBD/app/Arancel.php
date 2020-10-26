<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Arancel extends Model
{
    protected $fillable = [
	    'semestre_arancel',
	    'monto_arancel',
	    'fecha_vencimiento_arancel',
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
