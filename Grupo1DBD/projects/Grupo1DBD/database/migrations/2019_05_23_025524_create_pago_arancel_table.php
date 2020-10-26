<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagoArancelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pago_arancels', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('fecha');
            $table->timestamps();

            //Llaves Foraneas
            $table->integer('id_arancel')->unsigned();
            $table->foreign('id_arancel')->references('id')->on('arancels')->onDelete('cascade');
            
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
        Schema::dropIfExists('pago_arancel');
    }
}
