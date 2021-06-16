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
        $postulante = [
            1, 2, 3, 4, 5, 11, 12, 13, 14, 15, 51, 52, 53, 54, 55, 6, 7, 8, 9, 10, 16, 17, 18, 19, 20,
            21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43,
            44, 45, 46, 47, 48, 49, 50, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 70, 72, 86, 87, 88
        ];
        $empresa = [
            1, 2, 3, 4, 5, 11, 12, 13, 14, 15, 51, 52, 53, 54, 55, 66, 67, 68, 69, 70, 71,
            72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85
        ];
        $evaluador = [1, 2, 3, 4, 5, 11, 12, 13, 14, 15, 51, 52, 53, 54, 55,];

        Rol::create([
            'display_name' => 'Administrador',
            'name' => 'administrador',
            'descripcion' => 'Permite administrar los catalogos y funciones del sistema en general',
        ])->syncPermissions([]);

        Rol::create([
            'display_name' => 'Postulante',
            'name' => 'postulante',
            'descripcion' => 'Permite registrar su perfil profesional, buscar ofertas y aplicar para los distintos puestos de trabajo',
        ])->syncPermissions($postulante);

        Rol::create([
            'display_name' => 'Empresa',
            'name' => 'empresa',
            'descripcion' => 'Permite crear ofertas de trabajo y buscar aspirantes para contactarlos',
        ])->syncPermissions($empresa);

        Rol::create([
            'display_name' => 'Evaluador RRHH',
            'name' => 'evaluador rrhh',
            'descripcion' => 'Encargado de evaluar los datos de los aspirantes',
        ])->syncPermissions($evaluador);
    }
}
