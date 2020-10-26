    <?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarreraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carreras', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre_carrera');
            $table->integer('duracion_semestres');
            $table->string('jornada');
            $table->integer('arancel');
            $table->string('grado_academico');
            $table->string('titulo_profesional');
            $table->integer('acreditacion');
            $table->integer('numero_estudiantes');
            $table->timestamps();

            //Llaves foraneas
            $table->integer('id_malla')->unsigned();
            $table->foreign('id_malla')->references('id')->on('mallas')->onDelete('cascade');

            $table->integer('id_facultad')->unsigned();
            $table->foreign('id_facultad')->references('id')->on('facultads')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carrera');
    }
}
