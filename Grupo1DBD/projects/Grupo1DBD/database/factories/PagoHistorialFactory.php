<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\PagoHistorial::class, function (Faker $faker) {
    $ids_historial = \DB::table('historial_de_pagos')->select('id')->get();
    $id_historial = $ids_historial->random()->id;
    $ids_pago = \DB::table('pagos')->select('id')->get();
    $id_pago = $ids_pago->random()->id;
    return [
        'id_historial' => $id_historial,
        'id_pago' => $id_pago,
    ];
});
