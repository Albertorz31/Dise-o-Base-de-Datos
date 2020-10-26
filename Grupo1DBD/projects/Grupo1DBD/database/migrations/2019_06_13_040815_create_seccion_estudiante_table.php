<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeccionEstudianteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seccion_estudiantes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('semestre');
            $table->integer('cursando');
            $table->integer('aprobado');
            $table->float('calificacion_catedra');
            $table->float('calificacion_laboratorio');
            $table->float('calificacion_final');
            $table->timestamps();
            $table->integer('id_estudiante')->unsigned();
            $table->foreign('id_estudiante')->references('id')->on('estudiantes')->onDelete('cascade');

            $table->integer('id_seccion')->unsigned();
            $table->foreign('id_seccion')->references('id')->on('seccions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seccion_estudiante');
    }
}
