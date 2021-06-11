<?php

namespace Database\Seeders;

use App\Models\Usuario\TipoUsuario;
use Illuminate\Database\Seeder;

class TipoUsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoUsuario::create([
            'nombre_tipo_usuario' => 'Administrador',
        ]);

        TipoUsuario::create([
            'nombre_tipo_usuario' => 'Postulante',
        ]);

        TipoUsuario::create([
            'nombre_tipo_usuario' => 'Empresa',
        ]);

        TipoUsuario::create([
            'nombre_tipo_usuario' => 'Evaluador RRHH',
        ]);
    }
}
