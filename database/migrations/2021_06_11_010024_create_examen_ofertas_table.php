<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamenOfertasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examen_oferta', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_examen')->unique();
            $table->unsignedBigInteger('id_oferta')->unique();

            $table->foreign('id_examen')->references('id')->on('examen')->onDelete('cascade');
            $table->foreign('id_oferta')->references('id')->on('oferta')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('examen_oferta');
    }
}
