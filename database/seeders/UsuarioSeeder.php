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
            'nombres' => 'Adonay',
            'apellidos' => 'Barahona',
            'correo' => 'example@example.com',
            'password' =>  bcrypt('hehexd123'),
            'es_admin' => true,
        ])->syncRoles(1);
    }
}
