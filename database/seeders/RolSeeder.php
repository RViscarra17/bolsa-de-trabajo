<?php

namespace Database\Seeders;

use App\Models\Usuario\Rol;
use Illuminate\Database\Seeder;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rol::create([
            'display_name' => 'Admin',
            'name' => 'admin',
            'descripcion' => 'test',
        ])->syncPermissions([]);

        Rol::create([
            'display_name' => 'Postulante',
            'name' => 'postulante',
            'descripcion' => 'test',
        ])->syncPermissions([]);

        Rol::create([
            'display_name' => 'Empresa',
            'name' => 'empresa',
            'descripcion' => 'test',
        ])->syncPermissions([]);

        Rol::create([
            'display_name' => 'Evaluador',
            'name' => 'evaluador',
            'descripcion' => 'test',
        ])->syncPermissions([]);
    }
}
