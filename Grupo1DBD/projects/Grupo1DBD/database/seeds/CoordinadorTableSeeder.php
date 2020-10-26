<?php

use Illuminate\Database\Seeder;

class CoordinadorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Coordinador::class, 5)->create();
    }
}
