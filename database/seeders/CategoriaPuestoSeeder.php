<?php

namespace Database\Seeders;

use App\Models\Laboral\CategoriaPuesto;
use App\Models\Laboral\Puesto;
use Illuminate\Database\Seeder;

class CategoriaPuestoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cat = CategoriaPuesto::create([
            'nombre_cat_puesto' => 'Ingenieria',
        ]);

        Puesto::create([
            'nombre_puesto' => 'Ing. Sistemas Informaticos',
            'id_cat_puesto' => $cat->id,
        ]);
    }
}
