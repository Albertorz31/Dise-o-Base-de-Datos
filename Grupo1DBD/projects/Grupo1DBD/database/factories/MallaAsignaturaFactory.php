<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\MallaAsignatura::class, function (Faker $faker) {
    $ids_mallas = \DB::table('mallas')->select('id')->get();
    $id_malla = $ids_mallas->random()->id;

    $ids_asignaturas = \DB::table('asignaturas')->select('id')->get();
    $id_asignatura = $ids_asignaturas->random()->id;
    return [
        'id_malla' => $id_malla,
        'id_asignatura' => $id_asignatura,
    ];
});
