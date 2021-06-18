<?php

namespace Database\Seeders;

use App\Models\Ubicacion\Ciudad;
use App\Models\Ubicacion\Estado;
use Illuminate\Database\Seeder;

class EstadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //El Salvador
        Estado::create([
            'nombre_estado' => 'San Salvador',
            'id_pais' => 1,
        ]);
        //Ciudades de San Salvador
        Ciudad::create([
            'nombre_ciudad' => 'San salvador',
            'id_estado' => 1,
        ]);

        Estado::create([
            'nombre_estado' => 'Ahuachapán',
            'id_pais' => 1,
        ]);

        Estado::create([
            'nombre_estado' => 'Cabañas',
            'id_pais' => 1,
        ]);

        Estado::create([
            'nombre_estado' => 'Chalatenango',
            'id_pais' => 1,
        ]);

        Estado::create([
            'nombre_estado' => 'Cuscatlán',
            'id_pais' => 1,
        ]);

        Estado::create([
            'nombre_estado' => 'La libertad',
            'id_pais' => 1,
        ]);

        Estado::create([
            'nombre_estado' => 'La paz',
            'id_pais' => 1,
        ]);

        Estado::create([
            'nombre_estado' => 'La Unión',
            'id_pais' => 1,
        ]);

        Estado::create([
            'nombre_estado' => 'Morazán',
            'id_pais' => 1,
        ]);

        Estado::create([
            'nombre_estado' => 'San Miguel',
            'id_pais' => 1,
        ]);

        Estado::create([
            'nombre_estado' => 'San Vicente',
            'id_pais' => 1,
        ]);

        Estado::create([
            'nombre_estado' => 'Santa Ana',
            'id_pais' => 1,
        ]);

        Estado::create([
            'nombre_estado' => 'Sonsonate',
            'id_pais' => 1,
        ]);

        Estado::create([
            'nombre_estado' => 'Usulután',
            'id_pais' => 1,
        ]);
    }
}
