<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Documento::class, function (Faker $faker) {


	$ids_seccion = \DB::table('seccions')->select('id')->get();
	$id_seccion = $ids_seccion->random()->id;


    return [
        'nombre_documento' => $faker->name,
        'contenido' => 'sahfksjghkdjfhkdjfhdkjfhksjdfhgksjhfsuhksjdhgskjd',
        'fecha' => $faker->date,
        'id_seccion' =>$id_seccion,
    ];
});
