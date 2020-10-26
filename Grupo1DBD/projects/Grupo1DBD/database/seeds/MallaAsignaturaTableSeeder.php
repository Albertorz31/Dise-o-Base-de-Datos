<?php

use Illuminate\Database\Seeder;

class MallaAsignaturaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\MallaAsignatura::class, 5)->create();
    }
}
