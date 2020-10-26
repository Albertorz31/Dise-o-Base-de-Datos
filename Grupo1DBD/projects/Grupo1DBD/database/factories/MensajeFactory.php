<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Mensaje::class, function (Faker $faker) {
    
	$ids_administrador = \DB::table('administradors')->select('id')->get();
	$ids_coordinador = \DB::table('coordinadors')->select('id')->get();
	$ids_profesor = \DB::table('profesors')->select('id')->get();
	$ids_estudiante = \DB::table('estudiantes')->select('id')->get();
    $id_administrador = NULL;
	$id_coordinador = NULL;
	$id_profesor = NULL;
    $id_estudiante = NULL;
    $array = array();
    for ($i = 0; $i < 2; $i++) {
        $rand = rand(0, 3);
        if ($rand == 0) {
            $id_administrador = $ids_administrador->random()->id;
            array_push($array, 3);
        }
        else if ($rand == 1) {
            $id_coordinador = $ids_coordinador->random()->id;
            array_push($array, 2);
        }
        else if ($rand == 2) {
            $id_profesor = $ids_profesor->random()->id;
            array_push($array, 1);
        }
        else {
            $id_estudiante = $ids_estudiante->random()->id;
            array_push($array, 0);
        }
    }
    return [
        'encabezado' => $faker->randomElement(['a','b','c','d']),
        'texto' => $faker->randomElement(['Texto prueba 1','Texto prueba 2','Texto prueba 3']),
        'hora_envio' => $faker->randomElement(['13:00', '01:21', '23:58', '15:21', '05:21']),
        'fecha_envio' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'envia' => $faker->randomElement($array),
        'id_administrador'=>$id_administrador,
        'id_coordinador'=>$id_coordinador,
        'id_profesor'=>$id_profesor,
        'id_estudiante'=>$id_estudiante,

    ];
});
