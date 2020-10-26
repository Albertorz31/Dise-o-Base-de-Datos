<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoordinadorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coordinadors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre_coordinador');
            $table->string('password');
            $table->date('fecha_nacimiento_coordinador');
            $table->string('email')->unique();
            $table->string('telefono_coordinador');
            $table->string('tipo_coordinador');
            $table->timestamps();

            //Llaves foraneas
            $table->integer('id_direccion')->unsigned();
            $table->foreign('id_direccion')->references('id')->on('direccions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coordinador');
    }
}
