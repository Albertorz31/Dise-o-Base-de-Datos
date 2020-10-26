<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagoHistorialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pago_historials', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

            //Llaves Foraneas
            $table->integer('id_historial')->unsigned();
            $table->foreign('id_historial')->references('id')->on('historial_de_pagos')->onDelete('cascade');

            $table->integer('id_pago')->unsigned();
            $table->foreign('id_pago')->references('id')->on('pagos')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pago_historial');
    }
}
