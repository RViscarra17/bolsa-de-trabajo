<?php

namespace Database\Seeders;

use App\Models\Usuario\Usuario;
use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Usuario::create([
            'nombres' => 'Admin',
            'apellidos' => 'admin',
            'correo' => 'admin@example.com',
            'password' =>  bcrypt('admin123'),
            'es_admin' => true,
            'id_tipo_usuario' => 1,
            'id_pais' => 1,
        ])->syncRoles(1);

        Usuario::create([
            'nombres' => 'Juan',
            'apellidos' => 'Perez',
            'correo' => 'postulante@example.com',
            'password' =>  bcrypt('password123'),
            'id_tipo_usuario' => 2,
            'id_pais' => 1,
        ])->syncRoles(2);

        Usuario::create([
            'nombres' => 'Sergio',
            'apellidos' => 'Ramos',
            'correo' => 'empresa@example.com',
            'password' =>  bcrypt('password123'),
            'id_tipo_usuario' => 3,
            'id_pais' => 1,
        ])->syncRoles(3);
    }
}
