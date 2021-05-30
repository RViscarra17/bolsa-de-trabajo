<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCertificacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificacion', function (Blueprint $table) {
            $table->id();
            $table->string('codigo_cert',25);
            $table->string('nombre_cert',50);
            $table->string('institucion_otorga',25);
            $table->date('fecha_desde_cert');
            $table->date('fecha_hasta_cert');
            $table->unsignedBigInteger('id_perfil');
            $table->unsignedBigInteger('id_tipo_cert')->nullable();
            $table->unsignedBigInteger('id_institucion_cert')->nullable();
            $table->timestamps();

            $table->foreign('id_perfil')->references('id')->on('perfil')->onDelete('cascade');
            $table->foreign('id_tipo_cert')->references('id')->on('tipo_certificacion');
            $table->foreign('id_institucion_cert')->references('id')->on('institucion_certificadora');
           

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('certificacion');
    }
}
