<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRespaldoEstudiantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respaldo_estudiantes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre_estudiante');
            $table->string('contraseña_estudiante');
            $table->date('fecha_nacimiento_estudiante');
            $table->string('correo_estudiante')->unique();
            $table->string('telefono_estudiante');
            $table->integer('asignaturas_aprobadas');
            $table->string('situacion_estudiante');
            $table->integer('nivel_estudiante');
            $table->date('fecha_ingreso');
            $table->date('ultima_matricula');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('respaldo_estudiantes');
    }
}
