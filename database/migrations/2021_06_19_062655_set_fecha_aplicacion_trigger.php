<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class SetFechaAplicacionTrigger extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared(DB::raw("
            CREATE TRIGGER trigger_fecha_ap_default 
            BEFORE INSERT ON aplica_a 
            FOR EACH ROW 
            BEGIN 
                IF new.fecha_ap IS NULL THEN
                    SET new.fecha_ap = NOW();
                END IF;
                IF new.id_estado_ap IS NULL THEN
                     SET new.id_estado_ap = 1;
                END IF;
            END
            "));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared(DB::raw("DROP TRIGGER IF EXISTS trigger_fecha_ap_default;"));
    }
}
