<?php

namespace Database\Seeders;

use App\Models\Usuario\Permiso;
use Illuminate\Database\Seeder;

class PermisoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permiso::create([
            'display_name' => 'test1',
            'name' => 'test_1',
            'descripcion' => 'pruebas',
        ]);

        Permiso::create([
            'display_name' => 'test2',
            'name' => 'test_2',
            'descripcion' => 'pruebas',
        ]);

        Permiso::create([
            'display_name' => 'test3',
            'name' => 'test_3',
            'descripcion' => 'pruebas',
        ]);

        Permiso::create([
            'display_name' => 'test4',
            'name' => 'test_4',
            'descripcion' => 'pruebas',
        ]);

        Permiso::create([
            'display_name' => 'test5',
            'name' => 'test_5',
            'descripcion' => 'pruebas',
        ]);

        Permiso::create([
            'display_name' => 'test5',
            'name' => 'test_5',
            'descripcion' => 'pruebas',
        ]);
    }
}
