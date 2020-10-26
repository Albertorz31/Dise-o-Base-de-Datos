<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\MensajeProfesor::class, function (Faker $faker) {

    $ids_mensaje = \DB::table('mensajes')->select('id')->get();
    $ids_profesor = \DB::table('profesors')->select('id')->get();

    $id_mensaje = $ids_mensaje->random()->id;
    $id_profesor = $ids_profesor->random()->id;

    return [
        'envia' => rand(0,1),
        'id_profesor' => $id_profesor,
        'id_mensaje' => $id_mensaje,
    ];
});
