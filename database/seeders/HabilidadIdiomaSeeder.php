<?php

namespace Database\Seeders;

use App\Models\Habilidad\HabilidadIdioma;
use Illuminate\Database\Seeder;

class HabilidadIdiomaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HabilidadIdioma::create([
            'nombre_hab_idioma' => 'Escritura',
        ]);

        HabilidadIdioma::create([
            'nombre_hab_idioma' => 'Lectura',
        ]);

        HabilidadIdioma::create([
            'nombre_hab_idioma' => 'Conversación',
        ]);

        HabilidadIdioma::create([
            'nombre_hab_idioma' => 'Escucha',
        ]);
    }
}
