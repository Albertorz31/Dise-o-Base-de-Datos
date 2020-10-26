<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Pago::class, function (Faker $faker) {
    $ids_estudiante = \DB::table('estudiantes')->select('id')->get();

    $id_estudiante = $ids_estudiante->random()->id;
    return [
        'tipo_pago' => $faker->randomElement(['Crédito', 'Débito', 'Efectivo', 'Transferencia']),
        'num_cuenta' => rand(0, 3750000),
        'pagado' => $faker->randomElement(['Matricula', 'Mensualidad']),
        'id_estudiante' => $id_estudiante,
    ];
});
