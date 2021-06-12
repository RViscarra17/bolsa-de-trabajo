<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreatePostulacionesPorUsuarioView extends Migration
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
            CREATE OR REPLACE VIEW cantidad_ofertas_usuario_postulante AS SELECT
                usuario.id AS id,
                usuario.nombres AS nombres,
                usuario.apellidos AS apellidos,
                (
                    SELECT COUNT(0)
                    FROM aplica_a
                    WHERE aplica_a.id_usuario = usuario.id
                ) AS Postulaciones
            FROM
                usuario
            WHERE
                usuario.id_tipo_usuario = 2;
            SQL;
    }


    private function dropView(): string
    {
        return <<<SQL
            DROP VIEW IF EXISTS `cantidad_ofertas_usuario_postulante`;
            SQL;
    }
}
