<?php

namespace Database\Seeders;

use App\Models\Otro\TipoLogro;
use Illuminate\Database\Seeder;

class TipoLogroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoLogro::create([
            'nombre_tipo_logro' => 'Premio',
        ]);

        TipoLogro::create([
            'nombre_tipo_logro' => 'Labor Social',
        ]);

        TipoLogro::create([
            'nombre_tipo_logro' => 'Otro',
        ]);
    }
}
