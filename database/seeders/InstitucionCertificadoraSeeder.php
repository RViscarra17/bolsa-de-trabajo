<?php

namespace Database\Seeders;

use App\Models\Educacion\InstitucionCertificadora;
use Illuminate\Database\Seeder;

class InstitucionCertificadoraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        InstitucionCertificadora::create(['nombre_institucion_cert' => 'IBM']);
        InstitucionCertificadora::create(['nombre_institucion_cert' => 'CISCO']);
        InstitucionCertificadora::create(['nombre_institucion_cert' => 'AWS']);
        InstitucionCertificadora::create(['nombre_institucion_cert' => 'Oracle']);
        InstitucionCertificadora::create(['nombre_institucion_cert' => 'Microsoft']);
        InstitucionCertificadora::create(['nombre_institucion_cert' => 'Adobe']);
    }
}
