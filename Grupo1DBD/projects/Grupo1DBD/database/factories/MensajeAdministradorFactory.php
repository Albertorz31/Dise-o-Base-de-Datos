<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\MensajeAdministrador::class, function (Faker $faker) {
    $ids_mensaje = DB::table('mensajes')->select('id')->get();
    $ids_administrador = DB::table('administradors')->select('id')->get();

    $id_mensaje = $ids_mensaje->random()->id;
    $id_administrador = $ids_administrador->random()->id;

    return [
        'envia' => rand(0,1),
        'id_administrador' => $id_administrador,
        'id_mensaje' => $id_mensaje,
    ];
});
