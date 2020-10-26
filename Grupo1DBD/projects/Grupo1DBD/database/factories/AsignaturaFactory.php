<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Asignatura::class, function (Faker $faker) {

	$ids_malla = \DB::table('mallas')->select('id')->get();
	$ids_estudiante = \DB::table('estudiantes')->select('id')->get();

	$id_malla = $ids_malla->random()->id;
	$id_estudiante = $ids_estudiante->random()->id;

    return [
        'nombre_asignatura' => $faker->randomElement(['DBD','ORGA','SISTOPE', 'TBD', 'MINGESO','Calculo I','Calculo II','Calculo III', 'EDECO']),
    	'nivel_asignatura' => rand(1,12),
    	'id_malla'=>$id_malla, 
    ];
});
