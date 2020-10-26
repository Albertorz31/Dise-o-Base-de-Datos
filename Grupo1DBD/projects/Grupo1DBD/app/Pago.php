<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    protected $fillable = [
	    'num_cuenta',
	    'tipo_pago',
	    'pagado',
	    'id',
      	'id_estudiante',
	];

	public function matriculas(){
		return $this ->hasMany('App\Matricula');
    }
    
    public function arancels(){
		return $this ->hasMany('App\Arancel');
    }
}
