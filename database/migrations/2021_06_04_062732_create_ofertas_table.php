<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfertasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oferta', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_oferta', 50);
            $table->string('descripcion_oferta', 255);
            $table->string('otros_requisitos', 500)->nullable();
            $table->string('ubicacion', 100);
            $table->date('fecha_inicio');
            $table->date('fecha_fin')->nullable();
            $table->integer('vacantes', false, true);
            $table->integer('experiencia', false, true);
            $table->char('genero', 1)->nullable();
            $table->boolean('viajar')->nullable();
            $table->boolean('vehiculo')->nullable();
            $table->boolean('cambio_residencia')->nullable();
            $table->unsignedBigInteger('id_empresa');
            $table->unsignedBigInteger('id_puesto');
            $table->unsignedBigInteger('id_ciudad');
            $table->timestamps();

            $table->foreign('id_empresa')->references('id')->on('empresa')->onDelete('cascade');
            $table->foreign('id_puesto')->references('id')->on('puesto');
            $table->foreign('id_ciudad')->references('id')->on('ciudad');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('oferta');
    }
}
