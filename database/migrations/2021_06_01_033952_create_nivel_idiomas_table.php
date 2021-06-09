<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNivelIdiomasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nivel_idioma', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_nivel_idioma', 25);
            $table->unsignedBigInteger('id_tipo_nivel');
            $table->timestamps();

            $table->foreign('id_tipo_nivel')->references('id')->on('tipo_nivel')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nivel_idioma');
    }
}
