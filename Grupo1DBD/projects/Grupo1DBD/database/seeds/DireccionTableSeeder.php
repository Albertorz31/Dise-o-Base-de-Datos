<?php

use Illuminate\Database\Seeder;

class DireccionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Direccion::class, 5)->create();
    }
}
