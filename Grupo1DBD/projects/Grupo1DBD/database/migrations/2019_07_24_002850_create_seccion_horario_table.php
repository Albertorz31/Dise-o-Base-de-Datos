<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeccionHorarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seccion_horarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('sala');
            $table->timestamps();

            $table->integer('id_horario')->unsigned();
            $table->foreign('id_horario')->references('id')->on('horarios')->onDelete('cascade');

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
        Schema::dropIfExists('seccion_horario');
    }
}
