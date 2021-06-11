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
            'display_name' => 'Administrador',
            'name' => 'administrador',
            'descripcion' => 'Permite administrar los catalogos y funciones del sistema en general',
        ])->syncPermissions([]);

        Rol::create([
            'display_name' => 'Postulante',
            'name' => 'postulante',
            'descripcion' => 'Permite registrar su perfil profesional, buscar ofertas y aplicar para los distintos puestos de trabajo',
        ])->syncPermissions([]);

        Rol::create([
            'display_name' => 'Empresa',
            'name' => 'empresa',
            'descripcion' => 'Permite crear ofertas de trabajo y buscar aspirantes para contactarlos',
        ])->syncPermissions([]);

        Rol::create([
            'display_name' => 'Evaluador RRHH',
            'name' => 'evaluador rrhh',
            'descripcion' => 'Encargado de evaluar los datos de los aspirantes',
        ])->syncPermissions([]);
    }
}
