<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAplicaATable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aplica_a', function (Blueprint $table) {
            $table->primary(['id_oferta', 'id_usuario']);
            $table->unsignedBigInteger('id_oferta');
            $table->unsignedBigInteger('id_usuario');
            $table->unsignedBigInteger('id_estado_ap')->nullable();
            $table->date('fecha_ap')->nullable();

            $table->foreign('id_oferta')->references('id')->on('oferta')->onDelete('cascade');
            $table->foreign('id_usuario')->references('id')->on('usuario')->onDelete('cascade');
            $table->foreign('id_estado_ap')->references('id')->on('estado_aplicacion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aplica_a');
    }
}
