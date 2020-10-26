<?php

use Illuminate\Database\Seeder;

class SeccionProfesorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\SeccionProfesor::class, 5)->create();
    }
}
