<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;

$factory->define(App\Estudiante::class, function (Faker $faker) {
  
  $ids_carrera = \DB::table('carreras')->select('id')->get();
  $ids_direccion = \DB::table('direccions')->select('id')->get();

  $id_carrera = $ids_carrera->random()->id;
  $id_direccion = $ids_direccion->random()->id;

  return [
      'nombre_estudiante' => $faker->randomElement(['Rodrigo','Juan','Alberto','Johnny','Marcelo','Francisca','Carolina','Paola']),
      'password' => Hash::make('secret'),
      'fecha_nacimiento_estudiante'  => $faker->date,
      'email' =>  $faker->unique()->safeEmail,
      'telefono_estudiante' => $faker->randomElement(['12345678','67894523']),
      'asignaturas_aprobadas' => rand(10,20),
      'situacion_estudiante' =>  $faker->randomElement(['regular','eliminado causal academica']),
      'nivel_estudiante' => rand(1,6),
      'fecha_ingreso'  => $faker->date,
      'matricula'  => rand(0,1),
      'id_carrera'=>$id_carrera,
      'id_direccion'=>$id_direccion,
  ];
});
