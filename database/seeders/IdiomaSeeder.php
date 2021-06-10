<?php

namespace Database\Seeders;

use App\Models\Habilidad\Idioma;
use Illuminate\Database\Seeder;

class IdiomaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Idioma::create([
            'codigo_idioma' => 'Español',
            'nombre_idioma' => 'SPA',
        ]);

        Idioma::create([
            'codigo_idioma' => 'Inglés',
            'nombre_idioma' => 'ENG',
        ]);

        Idioma::create([
            'codigo_idioma' => 'Francés',
            'nombre_idioma' => 'FRA',
        ]);

        Idioma::create([
            'codigo_idioma' => 'Portugués',
            'nombre_idioma' => 'POR',
        ]);

        Idioma::create([
            'codigo_idioma' => 'Italiano',
            'nombre_idioma' => 'ITA',
        ]);

        Idioma::create([
            'codigo_idioma' => 'Alemán',
            'nombre_idioma' => 'DEU',
        ]);

        Idioma::create([
            'codigo_idioma' => 'Japonés',
            'nombre_idioma' => 'JPN',
        ]);

        Idioma::create([
            'codigo_idioma' => 'Coreano',
            'nombre_idioma' => 'KOR',
        ]);

        Idioma::create([
            'codigo_idioma' => 'Tailandés',
            'nombre_idioma' => 'THA',
        ]);

        Idioma::create([
            'codigo_idioma' => 'Mandarín',
            'nombre_idioma' => 'CNM',
        ]);

        Idioma::create([
            'codigo_idioma' => 'Hindi',
            'nombre_idioma' => 'HIN',
        ]);

        Idioma::create([
            'codigo_idioma' => 'Ruso',
            'nombre_idioma' => 'RUS',
        ]);

        Idioma::create([
            'codigo_idioma' => 'Holandés',
            'nombre_idioma' => 'NLD',
        ]);

        Idioma::create([
            'codigo_idioma' => 'Sueco',
            'nombre_idioma' => 'SWE',
        ]);

        Idioma::create([
            'codigo_idioma' => 'Afrikáans',
            'nombre_idioma' => 'AFR',
        ]);

        Idioma::create([
            'codigo_idioma' => 'Griego',
            'nombre_idioma' => 'ELL',
        ]);

        Idioma::create([
            'codigo_idioma' => 'Indonesio',
            'nombre_idioma' => 'IND',
        ]);

        Idioma::create([
            'codigo_idioma' => 'Hebreo',
            'nombre_idioma' => 'HEB',
        ]);

        Idioma::create([
            'codigo_idioma' => 'Árabe',
            'nombre_idioma' => 'ARA',
        ]);
    }
}
