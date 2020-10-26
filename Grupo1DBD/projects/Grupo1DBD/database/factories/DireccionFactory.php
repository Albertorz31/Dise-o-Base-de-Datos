<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Direccion::class, function (Faker $faker) {
    return [
        'comuna_direccion' => $faker->name,
        'calle_direccion' => $faker->streetAddress,
        'nombre_direccion' => $faker->name,
        'numero_direccion' =>rand(1,100),
        'region' => $faker->city,
        'pais' => $faker->country,
    ];
});
