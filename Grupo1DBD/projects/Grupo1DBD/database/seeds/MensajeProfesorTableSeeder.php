<?php

use Illuminate\Database\Seeder;

class MensajeProfesorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\MensajeProfesor::class, 5)->create();
    }
}
