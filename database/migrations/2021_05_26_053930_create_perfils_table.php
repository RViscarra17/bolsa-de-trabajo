<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerfilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perfil', function (Blueprint $table) {
            $table->id();
            $table->char('genero', 1);
            $table->char('dui', 10);
            $table->char('nit', 17);
            $table->char('nup', 12);
            $table->date('fecha_nacimiento');
            $table->string('pasaporte', 9);
            $table->string('resumen', 255);
            $table->string('otros_datos', 500);
            $table->boolean('disponibilidad_viaje')->nullable();
            $table->boolean('posee_vehiculo')->nullable();
            $table->boolean('puede_cambiar_res')->nullable();
            $table->unsignedBigInteger('id_usuario');
            $table->timestamps();

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
        Schema::dropIfExists('perfil');
    }
}
