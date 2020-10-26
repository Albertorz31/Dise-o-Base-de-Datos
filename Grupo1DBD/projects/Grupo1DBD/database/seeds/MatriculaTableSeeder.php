<?php

use Illuminate\Database\Seeder;

class MatriculaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Matricula::class, 5)->create();
    }
}
