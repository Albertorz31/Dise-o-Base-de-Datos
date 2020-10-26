<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Utilidad::class, function (Faker $faker) {
  $ids_estudiante = \DB::table('estudiantes')->select('id')->get();

  $id_estudiante = $ids_estudiante->random()->id;

  return [
      'documentos_disponibles' => $faker->randomElement(['calendario de actividades academicas','guia de apoyo para estudiantes']),
      'certificados_disponibles' => $faker->randomElement(['certificado alumno regular AFP','certificado alumno regular FONASA']),
      'solicitudes_enviadas' => $faker->randomElement(['solicitud de incorporacion','solicitud de cambio de carrera']),
      'id_estudiante'=>$id_estudiante,
  ];
});
