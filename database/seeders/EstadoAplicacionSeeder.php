<?php

namespace Database\Seeders;

use App\Models\Oferta\EstadoAplicacion;
use Illuminate\Database\Seeder;

class EstadoAplicacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EstadoAplicacion::create(['nombre_estado_ap' => 'En espera']);
        EstadoAplicacion::create(['nombre_estado_ap' => 'Aprobada']);
        EstadoAplicacion::create(['nombre_estado_ap' => 'Rechazada']);
    }
}
