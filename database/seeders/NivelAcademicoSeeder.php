<?php

namespace Database\Seeders;

use App\Models\Educacion\NivelAcademico;
use Illuminate\Database\Seeder;

class NivelAcademicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        NivelAcademico::create(['nombre_nivel_ac' => 'Educación Básica Primaria']);
        NivelAcademico::create(['nombre_nivel_ac' => 'Educación Básica Secundaria']);
        NivelAcademico::create(['nombre_nivel_ac' => 'Educación Media (Bachillerato)']);
        NivelAcademico::create(['nombre_nivel_ac' => 'Educación Técnica Profesional']);
        NivelAcademico::create(['nombre_nivel_ac' => 'Educación Superior (Universidad)']);
        NivelAcademico::create(['nombre_nivel_ac' => 'Posgrado']);
    }
}
