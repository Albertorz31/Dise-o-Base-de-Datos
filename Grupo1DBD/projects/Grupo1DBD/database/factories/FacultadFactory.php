<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Facultad::class, function (Faker $faker) {

    return [
    	'nombre_facultad' => $faker->randomElement(['Facultad de Ingenieria','Facultad de Administracion y Economia']),
    	'numero_carreras' => rand(1,9),
    	'numero_estudiantes' => rand(5,100),
    ];
});
