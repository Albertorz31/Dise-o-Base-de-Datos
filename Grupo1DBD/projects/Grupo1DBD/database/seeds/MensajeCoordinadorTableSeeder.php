<?php

use Illuminate\Database\Seeder;

class MensajeCoordinadorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\MensajeCoordinador::class, 5)->create();
    }
}
