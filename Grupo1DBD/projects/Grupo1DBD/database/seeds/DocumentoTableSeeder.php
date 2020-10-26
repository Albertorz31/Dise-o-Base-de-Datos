<?php

use Illuminate\Database\Seeder;

class DocumentoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Documento::class, 5)->create();
    }
}
