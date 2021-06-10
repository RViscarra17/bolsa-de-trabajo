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
        CategoriaTitulo::create(['nombre_cat_titulo' => 'Ingenieria y arquitectura']);
        CategoriaTitulo::create(['nombre_cat_titulo' => 'Medicina']);
        CategoriaTitulo::create(['nombre_cat_titulo' => 'Odontología']);
        CategoriaTitulo::create(['nombre_cat_titulo' => 'Humanidades']);
        CategoriaTitulo::create(['nombre_cat_titulo' => 'Ciencias agronomicas']);
        CategoriaTitulo::create(['nombre_cat_titulo' => 'Ciencias económicas']);
        CategoriaTitulo::create(['nombre_cat_titulo' => 'Ciencias naturales y matemática']);
        CategoriaTitulo::create(['nombre_cat_titulo' => 'Jurisprudencia']);
        CategoriaTitulo::create(['nombre_cat_titulo' => 'Química y farmacia']);
        CategoriaTitulo::create(['nombre_cat_titulo' => 'Otros']);
    }
}
