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
            'password' =>  bcrypt('password'),
            'es_admin' => true,
        ])->syncRoles(1);
    }
}
