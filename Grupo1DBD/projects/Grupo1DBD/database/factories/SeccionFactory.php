<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Seccion::class, function (Faker $faker) {

	$ids_asignatura = \DB::table('asignaturas')->select('id')->get();
	$ids_horario = \DB::table('horarios')->select('id')->get();

	$id_asignatura = $ids_asignatura->random()->id;
	$id_horario = $ids_horario->random()->id;

    return [
        'tipo_seccion' =>$faker->randomElement(['Teoria','Laboratorio']),
        'sala' => $faker->randomElement(['sala 512','lab3']),
        'modulo' => $faker->randomElement(['08:00-09:40','17:00-18:40']),
        'id_asignatura'=>$id_asignatura,
        'id_horario'=>$id_horario,
    ];
});
