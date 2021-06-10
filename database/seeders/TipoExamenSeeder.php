<?php

namespace Database\Seeders;

use App\Models\Cuestionario\TipoExamen;
use Illuminate\Database\Seeder;

class TipoExamenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoExamen::create(['nombre_tipo_exa' => 'Psicológico']);
        TipoExamen::create(['nombre_tipo_exa' => 'Conocimientos generales']);
        TipoExamen::create(['nombre_tipo_exa' => 'Razonamiento lógico']);
        TipoExamen::create(['nombre_tipo_exa' => 'Clasificación']);
        TipoExamen::create(['nombre_tipo_exa' => 'Rendimiento']);
    }
}
