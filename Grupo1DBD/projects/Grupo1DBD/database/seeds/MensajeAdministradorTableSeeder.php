<?php

use Illuminate\Database\Seeder;

class MensajeAdministradorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\MensajeAdministrador::class, 5)->create();
    }
}
