<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\SeccionProfesor::class, function (Faker $faker) {
    $ids_profesor = \DB::table('profesors')->select('id')->get();
	$ids_seccion = \DB::table('seccions')->select('id')->get();

	$id_profesor = $ids_profesor->random()->id;
	$id_seccion = $ids_seccion->random()->id;

    return [
        'id_profesor'=>$id_profesor,
        'id_seccion'=>$id_seccion,
        'semestre' => rand(0, 100),
    ];
});
