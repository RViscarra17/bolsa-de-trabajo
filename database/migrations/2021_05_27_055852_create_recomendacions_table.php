<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecomendacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recomendacion', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_rec', 100);
            $table->string('telefono_rec', 16);
            $table->string('correo_rec', 255)->nullable();
            $table->unsignedBigInteger('id_perfil');
            $table->timestamps();

            $table->foreign('id_perfil')->references('id')->on('perfil')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recomendacion');
    }
}
