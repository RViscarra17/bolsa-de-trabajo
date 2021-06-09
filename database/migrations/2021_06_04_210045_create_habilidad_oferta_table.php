<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHabilidadOfertaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('habilidad_oferta', function (Blueprint $table) {
            $table->primary(['id_habilidad', 'id_oferta']);
            $table->unsignedBigInteger('id_habilidad');
            $table->unsignedBigInteger('id_oferta');
            $table->integer('experiencia', false, true)->nullable();
            $table->timestamps();

            $table->foreign('id_habilidad')->references('id')->on('habilidad')->onDelete('cascade');
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
        Schema::dropIfExists('habilidad_oferta');
    }
}
