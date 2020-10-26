<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PagoArancel extends Model
{
    protected $fillable = [
	    'id',
	    'id_pago',
	    'id_arancel',
        'fecha',
	];
}
