<?php

namespace Database\Seeders;

use App\Models\Cuestionario\TipoPregunta;
use Illuminate\Database\Seeder;

class TipoPreguntaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoPregunta::create(['nombre_tipo_pre' => 'Opción multiple']);
        TipoPregunta::create(['nombre_tipo_pre' => 'Verdadero/Falso']);
        TipoPregunta::create(['nombre_tipo_pre' => 'Multiple respuesta']);
    }
}
