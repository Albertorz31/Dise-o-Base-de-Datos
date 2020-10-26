<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Arancel::class, function (Faker $faker) {
    $ids_pago = \DB::table('pagos')->select('id')->get();
	$ids_historial = \DB::table('historial_de_pagos')->select('id')->get();

	$id_pago = $ids_pago->random()->id;
	$id_historial = $ids_historial->random()->id;
    return [
        'semestre_arancel' => rand(1,18),
        'monto_arancel' => rand(4400000, 3750000),
        'fecha_vencimiento_arancel' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'id_pago'=>$id_pago,
        'id_historial_de_pago'=>$id_historial,
    ];
});
