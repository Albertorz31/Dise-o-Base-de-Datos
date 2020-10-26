<?php

use Illuminate\Database\Seeder;

class SeccionEstudianteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\SeccionEstudiante::class, 20)->create();
    }
}
