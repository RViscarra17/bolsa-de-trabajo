<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class SetDefaultPaisTrigger extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared(DB::raw("
            CREATE TRIGGER trigger_set_default_pais_trigger 
            BEFORE INSERT ON usuario 
            FOR EACH ROW 
            BEGIN 
                IF new.id_pais IS NULL THEN
                    SET new.id_pais = 1;
                END IF;
                IF new.id_tipo_usuario IS NULL THEN
                     SET new.id_tipo_usuario = 3;
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
        DB::unprepared(DB::raw("DROP TRIGGER IF EXISTS trigger_set_default_pais_trigger;"));
    }
}
