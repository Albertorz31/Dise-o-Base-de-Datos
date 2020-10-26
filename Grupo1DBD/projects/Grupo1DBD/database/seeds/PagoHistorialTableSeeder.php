<?php

use Illuminate\Database\Seeder;

class PagoHistorialTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\PagoHistorial::class, 5)->create();
    }
}
