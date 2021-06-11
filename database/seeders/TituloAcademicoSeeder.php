<?php

namespace Database\Seeders;

use App\Models\Educacion\TituloAcademico;
use Illuminate\Database\Seeder;

class TituloAcademicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Ingenieria
        TituloAcademico::create([
            'nombre_titulo_ac' => 'Ingeniería en Sistemas Informáticos',
            'id_cat_titulo' => 1
        ]);

        TituloAcademico::create([
            'nombre_titulo_ac' => 'Ingenieria de desarrollo de software',
            'id_cat_titulo' => 1
        ]);

        TituloAcademico::create([
            'nombre_titulo_ac' => 'Ingeniería Civil',
            'id_cat_titulo' => 1
        ]);

        TituloAcademico::create([
            'nombre_titulo_ac' => 'Ingeniería Mecánica',
            'id_cat_titulo' => 1
        ]);

        TituloAcademico::create([
            'nombre_titulo_ac' => 'Ingeniería Eléctrica',
            'id_cat_titulo' => 1
        ]);

        TituloAcademico::create([
            'nombre_titulo_ac' => 'Ingeniería Química',
            'id_cat_titulo' => 1
        ]);

        TituloAcademico::create([
            'nombre_titulo_ac' => 'Ingeniería Industrial',
            'id_cat_titulo' => 1
        ]);

        TituloAcademico::create([
            'nombre_titulo_ac' => 'Ingeniería de Alimentos',
            'id_cat_titulo' => 1
        ]);


        //Medicina
        TituloAcademico::create([
            'nombre_titulo_ac' => 'Doctorado en Medicina',
            'id_cat_titulo' => 2
        ]);

        TituloAcademico::create([
            'nombre_titulo_ac' => 'Licenciatura en Laboratorio Clínico',
            'id_cat_titulo' => 2
        ]);

        TituloAcademico::create([
            'nombre_titulo_ac' => 'Licenciatura en Anestesiología e Inhaloterapia',
            'id_cat_titulo' => 2
        ]);

        TituloAcademico::create([
            'nombre_titulo_ac' => 'Licenciatura en Radiología e Imágenes',
            'id_cat_titulo' => 2
        ]);

        TituloAcademico::create([
            'nombre_titulo_ac' => 'Licenciatura en Nutrición',
            'id_cat_titulo' => 2
        ]);

        TituloAcademico::create([
            'nombre_titulo_ac' => 'Licenciatura en Educación para la Salud',
            'id_cat_titulo' => 2
        ]);

        TituloAcademico::create([
            'nombre_titulo_ac' => 'Licenciatura en Ecotecnología',
            'id_cat_titulo' => 2
        ]);

        TituloAcademico::create([
            'nombre_titulo_ac' => 'Licenciatura en Salud Materno Infantil',
            'id_cat_titulo' => 2
        ]);

        TituloAcademico::create([
            'nombre_titulo_ac' => 'Licenciatura en Fisioterapia y Terapia Ocupacional',
            'id_cat_titulo' => 2
        ]);

        TituloAcademico::create([
            'nombre_titulo_ac' => 'Licenciatura en Salud Ambiental',
            'id_cat_titulo' => 2
        ]);

        TituloAcademico::create([
            'nombre_titulo_ac' => 'Licenciatura en Enfermería',
            'id_cat_titulo' => 2
        ]);

        TituloAcademico::create([
            'nombre_titulo_ac' => 'Maestría en Salud Pública',
            'id_cat_titulo' => 2
        ]);

        //Odontologia        
        TituloAcademico::create([
            'nombre_titulo_ac' => 'Doctorado en Cirugía Dental',
            'id_cat_titulo' => 3
        ]);

        //Humanidades
        TituloAcademico::create([
            'nombre_titulo_ac' => 'Licenciatura en Filosofía',
            'id_cat_titulo' => 4
        ]);

        TituloAcademico::create([
            'nombre_titulo_ac' => 'Licenciatura en Sociología',
            'id_cat_titulo' => 4
        ]);

        TituloAcademico::create([
            'nombre_titulo_ac' => 'Licenciatura en Psicología',
            'id_cat_titulo' => 4
        ]);

        TituloAcademico::create([
            'nombre_titulo_ac' => 'Licenciatura en Letras',
            'id_cat_titulo' => 4
        ]);

        TituloAcademico::create([
            'nombre_titulo_ac' => 'Licenciatura en Periodismo',
            'id_cat_titulo' => 4
        ]);

        TituloAcademico::create([
            'nombre_titulo_ac' => 'Licenciatura en Idioma Inglés',
            'id_cat_titulo' => 4
        ]);

        TituloAcademico::create([
            'nombre_titulo_ac' => 'Licenciatura en Lenguas Modernas',
            'id_cat_titulo' => 4
        ]);

        TituloAcademico::create([
            'nombre_titulo_ac' => 'Licenciatura en Educación',
            'id_cat_titulo' => 4
        ]);

        TituloAcademico::create([
            'nombre_titulo_ac' => 'Licenciatura en Educación Física',
            'id_cat_titulo' => 4
        ]);

        TituloAcademico::create([
            'nombre_titulo_ac' => 'Licenciatura en Artes Plásticas',
            'id_cat_titulo' => 4
        ]);

        TituloAcademico::create([
            'nombre_titulo_ac' => 'Licenciatura en Historia',
            'id_cat_titulo' => 4
        ]);

        TituloAcademico::create([
            'nombre_titulo_ac' => 'Licenciatura en Trabajo Social',
            'id_cat_titulo' => 4
        ]);

        TituloAcademico::create([
            'nombre_titulo_ac' => 'Licenciatura en Antropología',
            'id_cat_titulo' => 4
        ]);

        TituloAcademico::create([
            'nombre_titulo_ac' => 'Maestria en Derechos Humanos',
            'id_cat_titulo' => 4
        ]);

        TituloAcademico::create([
            'nombre_titulo_ac' => 'Maestría en Traducción',
            'id_cat_titulo' => 4
        ]);

        TituloAcademico::create([
            'nombre_titulo_ac' => 'Maestría en Didáctica y Formación del Profesorado',
            'id_cat_titulo' => 4
        ]);

        TituloAcademico::create([
            'nombre_titulo_ac' => 'Maestría en Didáctica para la Formación Docente',
            'id_cat_titulo' => 4
        ]);

        TituloAcademico::create([
            'nombre_titulo_ac' => 'Profesorado en Educación Parvularia',
            'id_cat_titulo' => 4
        ]);

        TituloAcademico::create([
            'nombre_titulo_ac' => 'Profesorado en Educación Básica ',
            'id_cat_titulo' => 4
        ]);

        TituloAcademico::create([
            'nombre_titulo_ac' => 'Profesorado en Educación Media ',
            'id_cat_titulo' => 4
        ]);

        TituloAcademico::create([
            'nombre_titulo_ac' => 'Profesorado en Lenguaje y Literatura ',
            'id_cat_titulo' => 4
        ]);

        TituloAcademico::create([
            'nombre_titulo_ac' => 'Profesorado en Idioma Inglés ',
            'id_cat_titulo' => 4
        ]);

        TituloAcademico::create([
            'nombre_titulo_ac' => 'Profesorado en Ciencias Sociales ',
            'id_cat_titulo' => 4
        ]);

        //Agronomia
        TituloAcademico::create([
            'nombre_titulo_ac' => 'Ingeniería Agronómica',
            'id_cat_titulo' => 5
        ]);

        TituloAcademico::create([
            'nombre_titulo_ac' => 'Licenciatura en Medicina Veterinaria y Zootecnia',
            'id_cat_titulo' => 5
        ]);

        TituloAcademico::create([
            'nombre_titulo_ac' => 'Maestría en Gestión Integral del Agua',
            'id_cat_titulo' => 5
        ]);


        //Economía
        TituloAcademico::create([
            'nombre_titulo_ac' => 'Licenciatura en Administración de Empresas',
            'id_cat_titulo' => 6
        ]);

        TituloAcademico::create([
            'nombre_titulo_ac' => 'Licenciatura en Contaduría Pública',
            'id_cat_titulo' => 6
        ]);

        TituloAcademico::create([
            'nombre_titulo_ac' => 'Licenciatura en Economía',
            'id_cat_titulo' => 6
        ]);

        TituloAcademico::create([
            'nombre_titulo_ac' => 'Licenciatura en Mercadeo Internacional',
            'id_cat_titulo' => 6
        ]);

        TituloAcademico::create([
            'nombre_titulo_ac' => 'Maestría en Administración de Empresas',
            'id_cat_titulo' => 6
        ]);

        TituloAcademico::create([
            'nombre_titulo_ac' => 'Maestría en Administración Financiera',
            'id_cat_titulo' => 6
        ]);

        //Naturales y matemática
        TituloAcademico::create([
            'nombre_titulo_ac' => 'Licenciatura en Geofísica',
            'id_cat_titulo' => 7
        ]);

        TituloAcademico::create([
            'nombre_titulo_ac' => 'Licenciatura en Biología',
            'id_cat_titulo' => 7
        ]);

        TituloAcademico::create([
            'nombre_titulo_ac' => 'Licenciatura en Física',
            'id_cat_titulo' => 7
        ]);

        TituloAcademico::create([
            'nombre_titulo_ac' => 'Licenciatura en Matemática',
            'id_cat_titulo' => 7
        ]);

        TituloAcademico::create([
            'nombre_titulo_ac' => 'Licenciatura en Estadística',
            'id_cat_titulo' => 7
        ]);

        TituloAcademico::create([
            'nombre_titulo_ac' => 'Licenciatura en Ciencias Químicas',
            'id_cat_titulo' => 7
        ]);

        TituloAcademico::create([
            'nombre_titulo_ac' => 'Licenciatura en Física',
            'id_cat_titulo' => 7
        ]);

        TituloAcademico::create([
            'nombre_titulo_ac' => 'Licenciatura en Biología',
            'id_cat_titulo' => 7
        ]);

        TituloAcademico::create([
            'nombre_titulo_ac' => 'Profesorado en Ciencias Naturales',
            'id_cat_titulo' => 7
        ]);

        TituloAcademico::create([
            'nombre_titulo_ac' => 'Profesorado en Matemática',
            'id_cat_titulo' => 7
        ]);

        TituloAcademico::create([
            'nombre_titulo_ac' => 'Maestría en Didáctica de la Matemática',
            'id_cat_titulo' => 7
        ]);

        TituloAcademico::create([
            'nombre_titulo_ac' => 'Maestría en Química',
            'id_cat_titulo' => 7
        ]);


        TituloAcademico::create([
            'nombre_titulo_ac' => 'Maestría en Física',
            'id_cat_titulo' => 7
        ]);

        TituloAcademico::create([
            'nombre_titulo_ac' => 'Maestría en Gestión Ambiental',
            'id_cat_titulo' => 7
        ]);

        //Jurisprudencia
        TituloAcademico::create([
            'nombre_titulo_ac' => 'Licenciatura en Ciencias Jurídicas',
            'id_cat_titulo' => 8
        ]);

        TituloAcademico::create([
            'nombre_titulo_ac' => 'Licenciatura en Relaciones Internacionales',
            'id_cat_titulo' => 8
        ]);

        TituloAcademico::create([
            'nombre_titulo_ac' => 'Maestría en Relaciones Internacionales',
            'id_cat_titulo' => 8
        ]);

        //Química
        TituloAcademico::create([
            'nombre_titulo_ac' => 'Licenciatura en Química y Farmacia',
            'id_cat_titulo' => 9
        ]);

        //Otros
        /*         TituloAcademico::create([
            'nombre_titulo_ac' => '',
            'id_cat_titulo' => 10
        ]); */
    }
}
