<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PagoHistorial extends Model
{
    protected $fillable = [
	    'id',
	    'id_pago',
	    'id_historial',
	];
}
