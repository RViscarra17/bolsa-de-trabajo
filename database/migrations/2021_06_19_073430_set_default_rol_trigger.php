<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class SetDefaultRolTrigger extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared(DB::raw("
        CREATE TRIGGER  trigger_set_default_rol AFTER INSERT ON usuario
        FOR EACH ROW
        BEGIN
            IF NEW.id not in (
                select R.model_id
                From rol_usuario R  -- CHECAR SI POSEE ROL
                where (NEW.id = R.model_id and R.model_type = 'App\\\Models\\\Usuario\\\Usuario')
            ) THEN -- CREAR NUEVO REGISTRO EN LA TABLA PIVOT DE ROLES
            INSERT INTO `rol_usuario` VALUES (3, 'App\\\Models\\\Usuario\\\Usuario', NEW.id);
            END IF;
        END;
            "));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared(DB::raw("DROP TRIGGER IF EXISTS trigger_set_default_rol;"));
    }
}
