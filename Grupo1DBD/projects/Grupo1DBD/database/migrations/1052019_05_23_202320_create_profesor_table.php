<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfesorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profesors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre_profesor');
            $table->string('password');
            $table->date('fecha_nacimiento_profesor');
            $table->string('email')->unique();
            $table->string('telefono_profesor');
            $table->integer('asignaturas_impartidas');
            $table->string('especialidad_profesor');
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
        Schema::dropIfExists('profesor');
    }
}
