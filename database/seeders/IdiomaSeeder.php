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
            'nombre_idioma' => 'Español',
            'codigo_idioma' => 'SPA',
        ]);

        Idioma::create([
            'nombre_idioma' => 'Inglés',
            'codigo_idioma' => 'ENG',
        ]);

        Idioma::create([
            'nombre_idioma' => 'Francés',
            'codigo_idioma' => 'FRA',
        ]);

        Idioma::create([
            'nombre_idioma' => 'Portugués',
            'codigo_idioma' => 'POR',
        ]);

        Idioma::create([
            'nombre_idioma' => 'Italiano',
            'codigo_idioma' => 'ITA',
        ]);

        Idioma::create([
            'nombre_idioma' => 'Alemán',
            'codigo_idioma' => 'DEU',
        ]);

        Idioma::create([
            'nombre_idioma' => 'Japonés',
            'codigo_idioma' => 'JPN',
        ]);

        Idioma::create([
            'nombre_idioma' => 'Coreano',
            'codigo_idioma' => 'KOR',
        ]);

        Idioma::create([
            'nombre_idioma' => 'Mandarín',
            'codigo_idioma' => 'CNM',
        ]);

        Idioma::create([
            'nombre_idioma' => 'Tailandés',
            'codigo_idioma' => 'THA',
        ]);

        Idioma::create([
            'nombre_idioma' => 'Hindi',
            'codigo_idioma' => 'HIN',
        ]);

        Idioma::create([
            'nombre_idioma' => 'Ruso',
            'codigo_idioma' => 'RUS',
        ]);

        Idioma::create([
            'nombre_idioma' => 'Holandés',
            'codigo_idioma' => 'NLD',
        ]);

        Idioma::create([
            'nombre_idioma' => 'Sueco',
            'codigo_idioma' => 'SWE',
        ]);

        Idioma::create([
            'nombre_idioma' => 'Afrikáans',
            'codigo_idioma' => 'AFR',
        ]);

        Idioma::create([
            'nombre_idioma' => 'Griego',
            'codigo_idioma' => 'ELL',
        ]);

        Idioma::create([
            'nombre_idioma' => 'Indonesio',
            'codigo_idioma' => 'IND',
        ]);

        Idioma::create([
            'nombre_idioma' => 'Hebreo',
            'codigo_idioma' => 'HEB',
        ]);

        Idioma::create([
            'nombre_idioma' => 'Árabe',
            'codigo_idioma' => 'ARA',
        ]);
    }
}
