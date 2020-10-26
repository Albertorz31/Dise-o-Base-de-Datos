<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMensajeCoordinadorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mensaje_coordinadors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('envia');
            $table->integer('id_coordinador')->unsigned();
            $table->foreign('id_coordinador')->references('id')->on('coordinadors')->onDelete('cascade');

            $table->integer('id_mensaje')->unsigned();
            $table->foreign('id_mensaje')->references('id')->on('mensajes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mensaje_coordinador');
    }
}
