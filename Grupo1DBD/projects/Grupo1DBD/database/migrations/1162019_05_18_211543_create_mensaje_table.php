<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMensajeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mensajes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('encabezado');
            $table->string('texto');
            $table->string('hora_envio');
            $table->string('fecha_envio');
            $table->integer('envia');
            
            $table->timestamps();

            //Llaves foraneas
 
            $table->integer('id_coordinador')->nullable()->unsigned();
            $table->foreign('id_coordinador')->references('id')->on('coordinadors')->onDelete('cascade');

            $table->integer('id_estudiante')->nullable()->unsigned();
            $table->foreign('id_estudiante')->references('id')->on('estudiantes')->onDelete('cascade');

            $table->integer('id_administrador')->nullable()->unsigned();
            $table->foreign('id_administrador')->references('id')->on('administradors')->onDelete('cascade');

            $table->integer('id_profesor')->nullable()->unsigned();
            $table->foreign('id_profesor')->references('id')->on('profesors')->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mensaje');
    }
}
