<?php

use Illuminate\Database\Seeder;

class MensajeEstudianteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\MensajeEstudiante::class, 5)->create();
    }
}
