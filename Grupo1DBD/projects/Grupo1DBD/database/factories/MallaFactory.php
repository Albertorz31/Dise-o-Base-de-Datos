<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Malla::class, function (Faker $faker) {
    return [
        'total_asignaturas' =>rand(30,42),
        'cantidad_semestres' =>rand(1,100),
    ];
});
