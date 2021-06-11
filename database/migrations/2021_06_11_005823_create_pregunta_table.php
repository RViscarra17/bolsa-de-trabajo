<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreguntaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pregunta', function (Blueprint $table) {
            $table->id();
            $table->string('texto_pregunta', 500);
            $table->integer('puntos');
            $table->integer('orden');
            $table->boolean('multiple_respuesta')->default(false);
            $table->unsignedBigInteger('id_examen');
            $table->unsignedBigInteger('id_tipo_pregunta');


            $table->foreign('id_examen')->references('id')->on('examen')->onDelete('cascade');
            $table->foreign('id_tipo_pregunta')->references('id')->on('tipo_pregunta');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pregunta');
    }
}
