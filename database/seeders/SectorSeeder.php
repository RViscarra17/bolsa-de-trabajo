<?php

namespace Database\Seeders;

use App\Models\Oferta\Sector;
use Illuminate\Database\Seeder;

class SectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sector::create(['nombre_sector' => 'Agricultura']);
        Sector::create(['nombre_sector' => 'Ganadería']);
        Sector::create(['nombre_sector' => 'Pesca y acuicultura']);
        Sector::create(['nombre_sector' => 'Silvicultura']);
        Sector::create(['nombre_sector' => 'Minería, metales y minerales']);
        Sector::create(['nombre_sector' => 'Industria']);
        Sector::create(['nombre_sector' => 'Ingeniería']);
        Sector::create(['nombre_sector' => 'Servicios informáticos']);
        Sector::create(['nombre_sector' => 'Energía y recursos energéticos']);
        Sector::create(['nombre_sector' => 'Construcción']);
        Sector::create(['nombre_sector' => 'Logística y transporte']);
        Sector::create(['nombre_sector' => 'Comunicaciones']);
        Sector::create(['nombre_sector' => 'Comercial']);
        Sector::create(['nombre_sector' => 'Turismo y hostelería']);
        Sector::create(['nombre_sector' => 'Sanitario']);
        Sector::create(['nombre_sector' => 'Educación y ciencia']);
        Sector::create(['nombre_sector' => 'Arte y cultura']);
        Sector::create(['nombre_sector' => 'Entretenimiento y recreación']);
        Sector::create(['nombre_sector' => 'Financiero']);
        Sector::create(['nombre_sector' => 'Administración']);
        Sector::create(['nombre_sector' => 'Seguridad']);
        Sector::create(['nombre_sector' => 'Investigación y desarrollo']);
        Sector::create(['nombre_sector' => 'Servicios sociales']);
        Sector::create(['nombre_sector' => 'Actividades inmobiliarias']);
        Sector::create(['nombre_sector' => 'Sin fines de lucro']);
    }
}
