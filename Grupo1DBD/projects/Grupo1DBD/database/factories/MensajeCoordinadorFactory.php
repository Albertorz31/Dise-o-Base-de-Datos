<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\MensajeCoordinador::class, function (Faker $faker) {
    $ids_mensaje = \DB::table('mensajes')->select('id')->get();
    $ids_coordinador = \DB::table('coordinadors')->select('id')->get();

    $id_mensaje = $ids_mensaje->random()->id;
    $id_coordinador = $ids_coordinador->random()->id;

    return [
        'envia' => rand(0,1),
        'id_coordinador' => $id_coordinador,
        'id_mensaje' => $id_mensaje,
    ];

});
