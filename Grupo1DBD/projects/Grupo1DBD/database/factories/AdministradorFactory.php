<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;

$factory->define(App\Administrador::class, function (Faker $faker) {
  $ids_direccion = \DB::table('direccions')->select('id')->get();

  $id_direccion = $ids_direccion->random()->id;

  return [
      'nombre_administrador' => $faker->randomElement(['esteban','matias']),
      'password' => Hash::make('secret'),
      'fecha_nacimiento_administrador'  => $faker->date,
      'email' =>  $faker->unique()->safeEmail,
      'telefono_adminstrador' => $faker->randomElement(['12345678','67894523']),
      'id_direccion'=>$id_direccion,
  ];
});
