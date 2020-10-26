<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\PagoMatricula::class, function (Faker $faker) {
    $ids_matricula = \DB::table('matriculas')->select('id')->get();
    $id_matricula = $ids_matricula->random()->id;
    $ids_pago = \DB::table('pagos')->select('id')->get();
    $id_pago = $ids_pago->random()->id;
    return [
        'id_matricula' => $id_matricula,
        'id_pago' => $id_pago,
        'fecha' => $faker->date($format = 'Y-m-d', $max = 'now'),
    ];
});
