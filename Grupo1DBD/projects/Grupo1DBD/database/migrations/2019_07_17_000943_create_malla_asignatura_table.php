<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMallaAsignaturaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('malla_asignaturas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

            //Llaves Foraneas
            $table->integer('id_malla')->unsigned();
            $table->foreign('id_malla')->references('id')->on('mallas')->onDelete('cascade');

            $table->integer('id_asignatura')->unsigned();
            $table->foreign('id_asignatura')->references('id')->on('asignaturas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('malla_asignaturas');
    }
}
