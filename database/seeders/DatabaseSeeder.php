<?php

namespace Database\Seeders;

use App\Models\Usuario\TipoUsuario;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            PermisoSeeder::class,
            RolSeeder::class,
            TipoUsuario::class,
            RedSocialSeeder::class,
            PaisSeeder::class,
            TipoLogroSeeder::class,
            TipoNivelSeeder::class,
            CategoriaPuestoSeeder::class,
            CategoriaHabilidadSeeder::class,
            CategoriaTituloSeeder::class,
            NivelAcademicoSeeder::class,
            TituloAcademicoSeeder::class,
            HabilidadIdiomaSeeder::class,
            IdiomaSeeder::class,
            TipoExamenSeeder::class,
            TipoPreguntaSeeder::class,
            TipoTelefonoSeeder::class,
            InstitucionCertificadoraSeeder::class,
            SectorSeeder::class,
            UsuarioSeeder::class,
            EmpresaSeeder::class,
        ]);
    }
}
