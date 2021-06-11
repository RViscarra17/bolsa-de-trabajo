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
            'correo' => 'example@example.com',
            'password' =>  bcrypt('admin123'),
            'es_admin' => true,
        ])->syncRoles(1);

        Usuario::create([
            'nombres' => 'Juan',
            'apellidos' => 'Perez',
            'correo' => 'postulante@example.com',
            'password' =>  bcrypt('password123'),
        ])->syncRoles(2);

        Usuario::create([
            'nombres' => 'Sergio',
            'apellidos' => 'Ramos',
            'correo' => 'empresa@example.com',
            'password' =>  bcrypt('password123'),
        ])->syncRoles(3);
    }
}
