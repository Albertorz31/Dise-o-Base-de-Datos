<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstudianteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre_estudiante');
            $table->string('password');
            $table->date('fecha_nacimiento_estudiante');
            $table->string('email')->unique();
            $table->string('telefono_estudiante');
            $table->integer('asignaturas_aprobadas');
            $table->string('situacion_estudiante');
            $table->integer('nivel_estudiante');
            $table->date('fecha_ingreso');
            $table->integer('matricula');
            $table->timestamps();

            //Llaves foraneas
            $table->integer('id_direccion')->unsigned();
            $table->foreign('id_direccion')->references('id')->on('direccions')->onDelete('cascade');
            $table->integer('id_carrera')->unsigned();
            $table->foreign('id_carrera')->references('id')->on('carreras')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estudiante');
    }
}
