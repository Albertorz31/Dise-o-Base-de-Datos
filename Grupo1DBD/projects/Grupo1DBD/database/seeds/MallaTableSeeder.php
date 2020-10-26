<?php

use Illuminate\Database\Seeder;

class MallaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Malla::class, 5)->create();
    }
}
