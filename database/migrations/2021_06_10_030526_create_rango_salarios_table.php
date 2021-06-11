<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRangoSalariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rango_salario', function (Blueprint $table) {
            $table->id();
            $table->double('minimo', 8, 2);
            $table->double('maximo', 8, 2)->nullable();
            $table->unsignedBigInteger('id_oferta');

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
        Schema::dropIfExists('rango_salario');
    }
}
