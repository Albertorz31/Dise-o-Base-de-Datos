<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;

$factory->define(App\Profesor::class, function (Faker $faker) {
  $ids_direccion = \DB::table('direccions')->select('id')->get();

  $id_direccion = $ids_direccion->random()->id;


  return [
      'nombre_profesor' => $faker->randomElement(['Marco','Luis','Franco','Monica','Luciano','Jacqueline','Manuel']),
      'password' => Hash::make('secret'),
      'fecha_nacimiento_profesor'  => $faker->date,
      'email' =>  $faker->unique()->safeEmail,
      'telefono_profesor' => $faker->randomElement(['12345678','67894523']),
      'asignaturas_impartidas' => rand(10,20),
      'especialidad_profesor' =>  $faker->randomElement(['Ingeniero informatico','Ingeniero electrico']),
      'id_direccion'=>$id_direccion,
  ];
});
