<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresa', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_emp', 50);
            $table->string('razon_social', 50)->nullable();
            $table->string('descripcion_emp', 255);
            $table->string('direccion_emp', 100);
            $table->string('sitio_web', 100)->nullable();
            $table->unsignedBigInteger('id_usuario');
            $table->unsignedBigInteger('id_sector');
            $table->timestamps();

            $table->foreign('id_usuario')->references('id')->on('usuario')->onDelete('cascade');
            $table->foreign('id_sector')->references('id')->on('sector')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empresa');
    }
}
