<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\HistorialDePago::class, function (Faker $faker) {
    return [
        'fecha_pago' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'monto_pago' =>rand(10000,50000),
    ];
});
