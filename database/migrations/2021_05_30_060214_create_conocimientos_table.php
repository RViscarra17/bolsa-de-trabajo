<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConocimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conocimiento', function (Blueprint $table) {
            $table->id();
            $table->string('institucion_academica',50);
            $table->date('fecha_inicio')->nullable();
            $table->date('fecha_fin')->nullable();
            $table->boolean('en_curso')->nullable();
            $table->unsignedBigInteger('id_perfil');
            $table->unsignedBigInteger('id_titulo_ac');
            $table->unsignedBigInteger('id_nivel_ac')->nullable();
            $table->timestamps();
            $table->foreign('id_perfil')->references('id')->on('perfil')->onDelete('cascade');
            $table->foreign('id_titulo_ac')->references('id')->on('titulo_academico')->onDelete('cascade');
            $table->foreign('id_nivel_ac')->references('id')->on('nivel_academico');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('conocimiento');
    }
}
