<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDireccionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('direccion', function (Blueprint $table) {
            $table->id();
            $table->string('codigo_postal', 15);
            $table->string('ubicacion', 100);
            $table->string('detalles_extra', 50)->nullable();
            $table->unsignedBigInteger('id_ciudad');
            $table->unsignedBigInteger('id_usuario');

            $table->foreign('id_ciudad')->references('id')->on('ciudad');
            $table->foreign('id_usuario')->references('id')->on('usuario')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('direccions');
    }
}
