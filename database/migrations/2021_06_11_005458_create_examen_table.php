<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examen', function (Blueprint $table) {
            $table->id();
            $table->string('titulo_examen');
            $table->unsignedBigInteger('id_empresa');
            $table->unsignedBigInteger('id_tipo_examen');
            $table->timestamps();

            $table->foreign('id_empresa')->references('id')->on('empresa')->onDelete('cascade');
            $table->foreign('id_tipo_examen')->references('id')->on('tipo_examen');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('examen');
    }
}
