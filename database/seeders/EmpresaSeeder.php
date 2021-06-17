<?php

namespace Database\Seeders;

use App\Models\Oferta\Empresa;
use App\Models\Oferta\Sector;
use App\Models\Usuario\Usuario;
use Illuminate\Database\Seeder;

class EmpresaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sector = Sector::create([
            'nombre_sector' => 'Software',
        ]);


        Empresa::create([
            'nombre_emp' => 'HSRD',
            'razon_social' => 'HDRD S.A. DE C.V.',
            'descripcion_emp' => '',
            'direccion_emp' => '',
            'sitio_web' => '',
            'id_sector' => $sector->id,
            'id_usuario' => 3,
        ]);
    }
}
