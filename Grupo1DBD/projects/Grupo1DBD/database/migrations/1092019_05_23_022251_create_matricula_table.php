<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatriculaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matriculas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('semestre_matricula');
            $table->integer('monto_matricula');
            $table->date('fecha_vencimiento_matricula');
            $table->timestamps();

            //Llaves foraneas
            $table->integer('id_pago')->unsigned();
            $table->foreign('id_pago')->references('id')->on('pagos')->onDelete('cascade');

            $table->integer('id_historial_de_pago')->unsigned();
            $table->foreign('id_historial_de_pago')->references('id')->on('historial_de_pagos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matricula');
    }
}
