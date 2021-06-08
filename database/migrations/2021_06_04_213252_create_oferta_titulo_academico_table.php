<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfertaTituloAcademicoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oferta_titulo_academico', function (Blueprint $table) {
            $table->primary(['id_oferta', 'id_titulo']);
            $table->unsignedBigInteger('id_oferta');
            $table->unsignedBigInteger('id_titulo');
            $table->integer('nivel_minimo', false, true)->nullable();
            $table->timestamps();

            $table->foreign('id_oferta')->references('id')->on('oferta')->onDelete('cascade');
            $table->foreign('id_titulo')->references('id')->on('titulo_academico')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('oferta_titulo_academico');
    }
}
