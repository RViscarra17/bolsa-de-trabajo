<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExperienciaLaboralsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experiencia_laboral', function (Blueprint $table) {
            $table->id();
            $table->string('empresa', 50);
            $table->string('tefono_emp', 16)->nullable();
            $table->string('correo_emp', 255)->nullable();
            $table->string('funciones', 500);
            $table->date('fecha_desde');
            $table->date('fecha_hasta')->nullable();
            $table->boolean('trabajo_actual')->nullable();
            $table->unsignedBigInteger('id_perfil');
            $table->unsignedBigInteger('id_puesto');
            $table->timestamps();

            $table->foreign('id_perfil')->references('id')->on('perfil')->onDelete('cascade');
            $table->foreign('id_puesto')->references('id')->on('puesto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('experiencia_laboral');
    }
}
