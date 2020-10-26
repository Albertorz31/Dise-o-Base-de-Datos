<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeccionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seccions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tipo_seccion');
            $table->string('sala');
            $table->string('modulo');
            $table->timestamps();

            //Llaves Foraneas
            $table->integer('id_asignatura')->unsigned();
            $table->foreign('id_asignatura')->references('id')->on('asignaturas')->onDelete('cascade');

            $table->integer('id_horario')->unsigned();
            $table->foreign('id_horario')->references('id')->on('horarios')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seccion');
    }
}
