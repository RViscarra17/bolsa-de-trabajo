<?php

namespace Database\Seeders;

use App\Models\Educacion\CategoriaTitulo;
use App\Models\Educacion\TituloAcademico;
use Illuminate\Database\Seeder;

class CategoriaTituloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cat = CategoriaTitulo::create([
            'nombre_cat_titulo' => 'Ingenieria',
        ]);

        TituloAcademico::create([
            'nombre_titulo_ac' => 'Ingenieria de sistemas informaticos',
            'id_cat_titulo' => $cat->id,
        ]);

        TituloAcademico::create([
            'nombre_titulo_ac' => 'Ingenieria de desarrollo de software',
            'id_cat_titulo' => $cat->id,
        ]);
    }
}
