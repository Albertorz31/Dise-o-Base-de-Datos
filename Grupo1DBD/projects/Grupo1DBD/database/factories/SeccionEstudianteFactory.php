<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\SeccionEstudiante::class, function (Faker $faker) {

    $ids_estudiante = \DB::table('estudiantes')->select('id')->get();
	$ids_seccion = \DB::table('seccions')->select('id')->get();

	$id_estudiante = $ids_estudiante->random()->id;
	$id_seccion = $ids_seccion->random()->id;


    $cursando = rand(0,1);


    if($cursando == 1){
        $aprobado = rand(0,1);
        if($aprobado == 1){
            $calificacion_catedra = rand(4.0,7.0);
            $calificacion_laboratorio = rand(4.0,7.0);
            $calificacion_final = ($calificacion_catedra + $calificacion_laboratorio)/2;
        }else{
            $calificacion_catedra = rand(1.0,3.9);
            $calificacion_laboratorio = rand(1.0,3.9);
            $calificacion_final = min($calificacion_catedra,$calificacion_laboratorio);
        }
             
    }else{
        $calificacion_catedra = 0.0;
        $calificacion_laboratorio = 0.0;
        $calificacion_final = 0.0;
        $aprobado = 0;
    }

    return [
        'id_estudiante'=>$id_estudiante,
        'id_seccion'=>$id_seccion,
        'semestre' => $faker->randomElement(['1/2016','2/2016','1/2017','2/2017','1/2018','2/2018']),
        'cursando' => $cursando,
        'aprobado' => $aprobado,
        'calificacion_catedra' => $calificacion_catedra,
        'calificacion_laboratorio' => $calificacion_laboratorio,
        'calificacion_final' => $calificacion_final,
    ];
});
