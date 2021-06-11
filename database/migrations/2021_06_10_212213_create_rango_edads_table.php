<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRangoEdadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rango_edad', function (Blueprint $table) {
            $table->id();
            $table->integer('edad_minima');
            $table->integer('edad_maxima')->nullable();
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
        Schema::dropIfExists('rango_edad');
    }
}
