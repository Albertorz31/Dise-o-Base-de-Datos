<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HistorialDePago extends Model
{
    protected $fillable = [
	    'fecha_pago',
        'monto_pago',
		'id',

	];

	public function arancels(){
		return $this ->hasMany('App\Arancel');
	}
	public function matriculas(){
		return $this ->hasMany('App\Matricula');
	}
}
