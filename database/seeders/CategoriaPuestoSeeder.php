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
        CategoriaPuesto::create(['nombre_cat_puesto' => 'Ingenieria']);

        Puesto::create([
            'nombre_puesto' => 'Ing. Sistemas Informaticos',
            'id_cat_puesto' => 1,
        ]);

        Puesto::create([
            'nombre_puesto' => 'Analista de seguridad de la información',
            'id_cat_puesto' => 1,
        ]);

        Puesto::create([
            'nombre_puesto' => 'Ingeniero de software',
            'id_cat_puesto' => 1,
        ]);

        Puesto::create([
            'nombre_puesto' => 'Analista de sistemas computacionales',
            'id_cat_puesto' => 1,
        ]);

        Puesto::create([
            'nombre_puesto' => 'Desarrollador web',
            'id_cat_puesto' => 1,
        ]);

        Puesto::create([
            'nombre_puesto' => 'Ingeniero civil',
            'id_cat_puesto' => 1,
        ]);

        Puesto::create([
            'nombre_puesto' => 'Ingeniero mecánico',
            'id_cat_puesto' => 1,
        ]);

        Puesto::create([
            'nombre_puesto' => 'Ingeniero en Control de Calidad',
            'id_cat_puesto' => 1,
        ]);

        CategoriaPuesto::create(['nombre_cat_puesto' => 'Medicina']);

        Puesto::create([
            'nombre_puesto' => '',
            'id_cat_puesto' => 2,
        ]);

        Puesto::create([
            'nombre_puesto' => '',
            'id_cat_puesto' => 2,
        ]);

        Puesto::create([
            'nombre_puesto' => '',
            'id_cat_puesto' => 2,
        ]);

        Puesto::create([
            'nombre_puesto' => '',
            'id_cat_puesto' => 2,
        ]);

        CategoriaPuesto::create(['nombre_cat_puesto' => 'Compras y Logística']);

        Puesto::create([
            'nombre_puesto' => ' Jefe de Logística',
            'id_cat_puesto' => 3,
        ]);

        Puesto::create([
            'nombre_puesto' => 'Responsable de Compra',
            'id_cat_puesto' => 3,
        ]);

        Puesto::create([
            'nombre_puesto' => 'Director comercial',
            'id_cat_puesto' => 3,
        ]);

        Puesto::create([
            'nombre_puesto' => 'Supervisor de Flotas',
            'id_cat_puesto' => 3,
        ]);
    }
}
