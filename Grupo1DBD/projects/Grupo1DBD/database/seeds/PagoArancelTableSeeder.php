<?php

use Illuminate\Database\Seeder;

class PagoArancelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\PagoArancel::class, 5)->create();
    }
}
