<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagoMatriculaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pago_matriculas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('fecha');
            $table->timestamps();

            //Llaves Foraneas
            $table->integer('id_matricula')->unsigned();
            $table->foreign('id_matricula')->references('id')->on('matriculas')->onDelete('cascade');
            
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
        Schema::dropIfExists('pago_matricula');
    }
}
