<?php

namespace Database\Seeders;

use App\Models\Oferta\EstadoAplicacion;
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
            TipoUsuarioSeeder::class,
            RedSocialSeeder::class,
            PaisSeeder::class,
            EstadoSeeder::class,
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
            EstadoAplicacion::class,
        ]);
    }
}
