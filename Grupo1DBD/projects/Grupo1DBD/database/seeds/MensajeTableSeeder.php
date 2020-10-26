<?php

use Illuminate\Database\Seeder;

class MensajeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Mensaje::class, 5)->create();
    }
}
