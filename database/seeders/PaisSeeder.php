<?php

namespace Database\Seeders;

use App\Models\Ubicacion\Ciudad;
use App\Models\Ubicacion\Estado;
use App\Models\Ubicacion\Pais;
use Illuminate\Database\Seeder;

class PaisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pais = Pais::create([
            'nombre_pais' => 'El Salvador',
            'codigo_pais' => 'SLV',
            'prefijo' => '503',
        ]);

        $estado = Estado::create([
            'nombre_estado' => 'San salvador',
            'id_pais' => $pais->id,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'San salvador',
            'id_estado' => $estado->id,
        ]);

        Pais::create([
            'nombre_pais' => 'El Salvador',
            'codigo_pais' => 'SLV',
            'prefijo' => '503',
        ]);
    }
}
