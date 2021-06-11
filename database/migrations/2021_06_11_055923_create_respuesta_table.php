<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRespuestaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respuesta', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_resultado_examen');
            $table->unsignedBigInteger('id_opcion');

            $table->foreign('id_resultado_examen')->references('id')->on('resultado_examen')->onDelete('cascade');
            $table->foreign('id_opcion')->references('id')->on('opcion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('respuesta');
    }
}
