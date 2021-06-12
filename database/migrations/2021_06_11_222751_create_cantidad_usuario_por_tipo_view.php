<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateCantidadUsuarioPorTipoView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement($this->createView());
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement($this->dropView());
    }

    private function createView(): string
    {
        return <<<SQL
            CREATE OR REPLACE VIEW cantidad_usuario_por_tipo AS SELECT
                tipo_usuario.nombre_tipo_usuario AS nombre_tipo_usuario,
                (
                    SELECT COUNT(0)
                    FROM usuario
                    WHERE usuario.id_tipo_usuario = tipo_usuario.id
                ) AS cantidad
            FROM
                tipo_usuario
            WHERE
                tipo_usuario.id <> 1;      
            SQL;
    }


    private function dropView(): string
    {
        return <<<SQL

            DROP VIEW IF EXISTS `cantidad_usuario_por_tipo`;
            SQL;
    }
}
