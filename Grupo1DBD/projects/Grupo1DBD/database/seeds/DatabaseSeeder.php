<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(FacultadTableSeeder::class);
        $this->call(MallaTableSeeder::class); 
        $this->call(DireccionTableSeeder::class);
        $this->call(CarreraTableSeeder::class);
        $this->call(EstudianteTableSeeder::class);
        $this->call(CoordinadorTableSeeder::class);
        $this->call(ProfesorTableSeeder::class);
        $this->call(AdministradorTableSeeder::class);
        $this->call(PagoTableSeeder::class);
        $this->call(HistorialDePagoTableSeeder::class);
        $this->call(PagoHistorialTableSeeder::class);
        $this->call(ArancelTableSeeder::class);
        $this->call(MatriculaTableSeeder::class);
        $this->call(UtilidadTableSeeder::class);
        $this->call(AsignaturaTableSeeder::class);
        $this->call(HorarioTableSeeder::class);
        $this->call(MensajeTableSeeder::class);    
        $this->call(SeccionTableSeeder::class);
        $this->call(DocumentoTableSeeder::class);
        $this->call(PagoArancelTableSeeder::class);
        $this->call(PagoMatriculaTableSeeder::class);    
        $this->call(SeccionEstudianteTableSeeder::class);
        $this->call(SeccionProfesorTableSeeder::class);
        $this->call(MallaAsignaturaTableSeeder::class);
        $this->call(SeccionHorarioSeeder::class);
        $this->call(MensajeAdministradorTableSeeder::class);
        $this->call(MensajeCoordinadorTableSeeder::class);
        $this->call(MensajeEstudianteTableSeeder::class);
        $this->call(MensajeProfesorTableSeeder::class);
    }
}
