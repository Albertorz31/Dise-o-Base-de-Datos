<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdministradorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administradors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre_administrador');
            $table->date('fecha_nacimiento_administrador');
            $table->string('email')->unique();
            $table->string('telefono_adminstrador');
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('administrador');
    }
}
