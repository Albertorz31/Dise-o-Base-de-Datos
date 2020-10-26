<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PagoMatricula extends Model
{
    protected $fillable = [
	    'id',
	    'id_pago',
	    'id_matricula',
        'fecha',
	];
}
