<?php

use Illuminate\Database\Seeder;

class UtilidadTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Utilidad::class, 5)->create();
    }
}
