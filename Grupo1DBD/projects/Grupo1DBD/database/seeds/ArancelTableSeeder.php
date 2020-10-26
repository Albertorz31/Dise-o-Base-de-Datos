<?php

use Illuminate\Database\Seeder;

class ArancelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Arancel::class, 5)->create();
    }
}
