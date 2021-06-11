<?php

namespace Database\Seeders;

use App\Models\Usuario\TipoTelefono;
use Illuminate\Database\Seeder;

class TipoTelefonoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoTelefono::create(['nombre_tipo_tel' => 'Movil']);
        TipoTelefono::create(['nombre_tipo_tel' => 'Trabajo']);
        TipoTelefono::create(['nombre_tipo_tel' => 'Casa']);
        TipoTelefono::create(['nombre_tipo_tel' => 'Otro']);
    }
}
