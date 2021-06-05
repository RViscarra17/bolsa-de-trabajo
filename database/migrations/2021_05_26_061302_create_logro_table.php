<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logro', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_logro', 50);
            $table->date('fecha_logro');
            $table->unsignedBigInteger('id_perfil');
            $table->unsignedBigInteger('id_tipo_logro');
            $table->timestamps();

            $table->foreign('id_perfil')->references('id')->on('perfil')->onDelete('cascade');
            $table->foreign('id_tipo_logro')->references('id')->on('tipo_logro')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('logro');
    }
}
