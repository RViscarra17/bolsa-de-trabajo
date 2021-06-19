<?php

namespace Database\Seeders;

use App\Models\Habilidad\CategoriaHabilidad;
use App\Models\Habilidad\Habilidad;
use Illuminate\Database\Seeder;

class CategoriaHabilidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cat = CategoriaHabilidad::create([
            'nombre_cat_habilidad' => 'Desarrollo de software',
        ]);

        Habilidad::create([
            'nombre_habilidad' => 'Backend',
            'id_cat_habilidad' => $cat->id,
        ]);

        Habilidad::create([
            'nombre_habilidad' => 'Frontend',
            'id_cat_habilidad' => $cat->id,
        ]);

        CategoriaHabilidad::create([
            'nombre_cat_habilidad' => '',
        ]);

        Habilidad::create([
            'nombre_habilidad' => '',
            'id_cat_habilidad' => 2,
        ]);
    }
}
