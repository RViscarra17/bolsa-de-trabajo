<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreatePostulantesPorPaisView extends Migration
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
            CREATE OR REPLACE VIEW postulantes_por_pais AS 
            SELECT
                pais.codigo_pais AS codigo_pais,
                pais.nombre_pais AS nombre_pais,
                (
                    SELECT COUNT(0)
                    FROM usuario
                    WHERE pais.id = usuario.id_pais AND usuario.id_tipo_usuario = 2
                ) AS cant_usuarios
            FROM
                pais;
            SQL;
    }


    private function dropView(): string
    {
        return <<<SQL

            DROP VIEW IF EXISTS `postulantes_por_pais`;
            SQL;
    }
}
