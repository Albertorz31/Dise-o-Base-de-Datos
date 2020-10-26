<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Horario::class, function (Faker $faker) {
    return [
        'dia' => $faker->randomElement(['Lunes','Martes','Miercoles','Jueves','Viernes','Sabado']),
        'modulo' => $faker->randomElement(['8:00-9:30','9:40-11:10','11:20-12:50','13:50-15:20','15:30-17:00','17:10-18:40']),
    ];
});
