<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFechaToLogroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('logro', function (Blueprint $table) {
            //
            $table->date('fecha_logro')->after('nombre_logro');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('logro', function (Blueprint $table) {
            //
            $table->dropColumn('fecha_logro');
        });
    }
}
