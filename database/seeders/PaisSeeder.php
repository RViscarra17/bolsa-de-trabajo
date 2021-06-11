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
            'nombre_pais' => 'Estados Unidos',
            'codigo_pais' => 'USA',
            'prefijo' => '1',
        ]);

        Pais::create([
            'nombre_pais' => 'Canadá',
            'codigo_pais' => 'CAN',
            'prefijo' => '1',
        ]);

        Pais::create([
            'nombre_pais' => 'Argentina',
            'codigo_pais' => 'ARG',
            'prefijo' => '54',
        ]);

        Pais::create([
            'nombre_pais' => 'Bolivia',
            'codigo_pais' => 'BOL',
            'prefijo' => '591',
        ]);

        Pais::create([
            'nombre_pais' => 'Chile',
            'codigo_pais' => 'CHL',
            'prefijo' => '56',
        ]);

        Pais::create([
            'nombre_pais' => 'Colombia',
            'codigo_pais' => 'COL',
            'prefijo' => '57',
        ]);

        Pais::create([
            'nombre_pais' => 'Costa Rica',
            'codigo_pais' => 'CRI',
            'prefijo' => '506',
        ]);

        Pais::create([
            'nombre_pais' => 'Ecuador',
            'codigo_pais' => 'ECU',
            'prefijo' => '593',
        ]);

        Pais::create([
            'nombre_pais' => 'Guatemala',
            'codigo_pais' => 'GTM',
            'prefijo' => '502',
        ]);

        Pais::create([
            'nombre_pais' => 'Honduras',
            'codigo_pais' => 'HND',
            'prefijo' => '504',
        ]);

        Pais::create([
            'nombre_pais' => 'México',
            'codigo_pais' => 'MEX',
            'prefijo' => '52',
        ]);

        Pais::create([
            'nombre_pais' => 'Nicaragua',
            'codigo_pais' => 'NIC',
            'prefijo' => '505',
        ]);

        Pais::create([
            'nombre_pais' => 'Panamá',
            'codigo_pais' => 'PAN',
            'prefijo' => '507',
        ]);

        Pais::create([
            'nombre_pais' => 'Paraguay',
            'codigo_pais' => 'PRY',
            'prefijo' => '595',
        ]);

        Pais::create([
            'nombre_pais' => 'Perú',
            'codigo_pais' => 'PER',
            'prefijo' => '51',
        ]);

        Pais::create([
            'nombre_pais' => 'Uruguay',
            'codigo_pais' => 'URY',
            'prefijo' => '598',
        ]);
    }
}
