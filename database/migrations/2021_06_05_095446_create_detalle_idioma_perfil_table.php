<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleIdiomaPerfilTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_idioma_perfil', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_hab_idioma');
            $table->unsignedBigInteger('id_nivel_idioma');
            $table->unsignedBigInteger('id_idioma_perfil');

            $table->foreign('id_hab_idioma')->references('id')->on('habilidad_idioma');
            $table->foreign('id_nivel_idioma')->references('id')->on('nivel_idioma');
            $table->foreign('id_idioma_perfil')->references('id')->on('idioma_perfil')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_idioma_perfil');
    }
}
