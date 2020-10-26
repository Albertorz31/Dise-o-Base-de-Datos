<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\SeccionHorario::class, function (Faker $faker) {
    $ids_horario = \DB::table('horarios')->select('id')->get();
    $ids_seccion = \DB::table('seccions')->select('id')->get();

    $id_horario = $ids_horario->random()->id;
    $id_seccion = $ids_seccion->random()->id;

    return [
        'id_horario'=>$id_horario,
        'id_seccion'=>$id_seccion,
        'sala' => rand(100, 700),
    ];
});
