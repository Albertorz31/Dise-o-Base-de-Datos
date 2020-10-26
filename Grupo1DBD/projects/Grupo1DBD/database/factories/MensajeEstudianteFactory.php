<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\MensajeEstudiante::class, function (Faker $faker) {

    $ids_mensaje = \DB::table('mensajes')->select('id')->get();
    $ids_estudiante = \DB::table('estudiantes')->select('id')->get();

    $id_mensaje = $ids_mensaje->random()->id;
    $id_estudiante= $ids_estudiante->random()->id;

    return [
        'envia' => rand(0,1),
        'id_estudiante' => $id_estudiante,
        'id_mensaje' => $id_mensaje,
    ];
});
