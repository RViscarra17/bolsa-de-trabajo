<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultadoExamenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resultado_examen', function (Blueprint $table) {
            $table->id();
            $table->double('nota', 4, 2)->nullable();
            $table->date('fecha_realizado')->nullable();
            $table->unsignedBigInteger('id_usuario');
            $table->unsignedBigInteger('id_examen_oferta');

            $table->foreign('id_usuario')->references('id')->on('usuario')->onDelete('cascade');
            $table->foreign('id_examen_oferta')->references('id')->on('examen_oferta')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resultado_examen');
    }
}
