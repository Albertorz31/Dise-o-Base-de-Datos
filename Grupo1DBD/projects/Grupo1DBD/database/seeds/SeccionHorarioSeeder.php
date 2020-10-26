<?php

use Illuminate\Database\Seeder;

class SeccionHorarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\SeccionHorario::class, 50)->create();
    }
}
