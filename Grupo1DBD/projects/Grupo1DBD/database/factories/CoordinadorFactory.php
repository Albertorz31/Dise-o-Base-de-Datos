<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;

$factory->define(App\Coordinador::class, function (Faker $faker) {
    
    $ids_direccion = \DB::table('direccions')->select('id')->get();
	$id_direccion = $ids_direccion->random()->id;

    return [
    	'nombre_coordinador' => $faker->name,
        'password' => Hash::make('secret'),
        'fecha_nacimiento_coordinador' => $faker->date,
        'email' => $faker->unique()->safeEmail,
        'telefono_coordinador' => rand(111111111,999999999),
        'tipo_coordinador' => $faker->randomElement(['Docente','Academico']),
        'id_direccion'=>$id_direccion,
    ];
});
