<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Carrera::class, function (Faker $faker) {
    
	$ids_facultad = \DB::table('facultads')->select('id')->get();
	$ids_malla = \DB::table('mallas')->select('id')->get();

	$id_facultad = $ids_facultad->random()->id;
	$id_malla = $ids_malla->random()->id;

    return [
        'nombre_carrera' => $faker->randomElement(['Ingenieria informatica','Ingenieria comercial']),
        'duracion_semestres' => rand(4,12),
        'jornada' => $faker->randomElement(['Diurno','Vespertino']),
        'arancel' => rand(1500000,3000000),
        'grado_academico' => $faker->randomElement(['Licenciado','Magister']),
        'titulo_profesional' => $faker->randomElement(['Ingeniero civil en informatica','Ingeniero comercial']),
        'acreditacion' => rand(0,6),
        'numero_estudiantes' => rand(300,1000),
        'id_facultad'=>$id_facultad,
        'id_malla'=>$id_malla,
    ];
});
