<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTituloAcademicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('titulo_academico', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_titulo_ac', 100);
            $table->unsignedBigInteger('id_cat_titulo');
            $table->timestamps();
            $table->foreign('id_cat_titulo')->references('id')->on('categoria_titulo')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('titulo_academico');
    }
}
