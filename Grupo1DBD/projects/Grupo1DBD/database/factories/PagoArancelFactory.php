<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\PagoArancel::class, function (Faker $faker) {
    $ids_arancel = \DB::table('arancels')->select('id')->get();
    $id_arancel = $ids_arancel->random()->id;
    $ids_pago = \DB::table('pagos')->select('id')->get();
    $id_pago = $ids_pago->random()->id;
    return [
        'id_arancel' => $id_arancel,
        'id_pago' => $id_pago,
        'fecha' => $faker->date($format = 'Y-m-d', $max = 'now'),
    ];
});
