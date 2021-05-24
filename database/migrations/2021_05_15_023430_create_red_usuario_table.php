<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRedUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('red_usuario', function (Blueprint $table) {
            $table->primary(['', '']);
            $table->unsignedBigInteger('id_red');
            $table->unsignedBigInteger('id_usuario');
            $table->string('nombre_usuario', 50);
            $table->string('enlace_red', 255)->nullable();
            $table->timestamps();

            $table->foreign('id_red')->references('id')->on('red_social')->onDelete('cascade');
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
        Schema::dropIfExists('red_usuario');
    }
}
