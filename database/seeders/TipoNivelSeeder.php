<?php

namespace Database\Seeders;

use App\Models\Habilidad\NivelIdioma;
use App\Models\Habilidad\TipoNivel;
use Illuminate\Database\Seeder;

class TipoNivelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $formal = TipoNivel::create(['nombre_tipo_nivel' => 'Formal']);
        $estimado = TipoNivel::create(['nombre_tipo_nivel' => 'Estimado']);

        NivelIdioma::create([
            'nombre_nivel_idioma' => 'Básico',
            'id_tipo_nivel' => $estimado->id,
        ]);

        NivelIdioma::create([
            'nombre_nivel_idioma' => 'Intermedio',
            'id_tipo_nivel' => $estimado->id,
        ]);

        NivelIdioma::create([
            'nombre_nivel_idioma' => 'Avanzado',
            'id_tipo_nivel' => $estimado->id,
        ]);

        NivelIdioma::create([
            'nombre_nivel_idioma' => 'A1',
            'id_tipo_nivel' => $formal->id,
        ]);

        NivelIdioma::create([
            'nombre_nivel_idioma' => 'A2',
            'id_tipo_nivel' => $formal->id,
        ]);

        NivelIdioma::create([
            'nombre_nivel_idioma' => 'B1',
            'id_tipo_nivel' => $formal->id,
        ]);

        NivelIdioma::create([
            'nombre_nivel_idioma' => 'B2',
            'id_tipo_nivel' => $formal->id,
        ]);

        NivelIdioma::create([
            'nombre_nivel_idioma' => 'C1',
            'id_tipo_nivel' => $formal->id,
        ]);

        NivelIdioma::create([
            'nombre_nivel_idioma' => 'C2',
            'id_tipo_nivel' => $formal->id,
        ]);
    }
}
