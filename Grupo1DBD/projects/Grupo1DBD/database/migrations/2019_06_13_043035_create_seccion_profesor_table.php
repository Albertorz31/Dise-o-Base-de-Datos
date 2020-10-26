<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeccionProfesorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seccion_profesors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('semestre');
            $table->timestamps();
            $table->integer('id_profesor')->unsigned();
            $table->foreign('id_profesor')->references('id')->on('profesors')->onDelete('cascade');

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
        Schema::dropIfExists('seccion_profesor');
    }
}
