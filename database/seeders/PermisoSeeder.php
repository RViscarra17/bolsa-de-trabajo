<?php

namespace Database\Seeders;

use App\Models\Usuario\Permiso;
use Illuminate\Database\Seeder;

class PermisoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Telefonos
        Permiso::create([
            'display_name' => '',
            'name' => 'consultar-telefonos',
            'descripcion' => 'Consultar los  del postulante',
        ]);

        Permiso::create([
            'display_name' => '',
            'name' => 'registrar-telefonos',
            'descripcion' => 'Permite registrar un  en el sistema',
        ]);

        Permiso::create([
            'display_name' => '',
            'name' => 'ver-telefonos',
            'descripcion' => 'Permite ver el detalle de   en el sistema',
        ]);

        Permiso::create([
            'display_name' => '',
            'name' => 'modificar-telefonos',
            'descripcion' => 'Permite modificar un  en el sistema',
        ]);

        Permiso::create([
            'display_name' => '',
            'name' => 'eliminar-telefonos',
            'descripcion' => 'Permite eliminar un  en el sistema',
        ]);

        //Logros
        Permiso::create([
            'display_name' => '',
            'name' => 'consultar-logros',
            'descripcion' => 'Consultar los logros del postulante',
        ]);

        Permiso::create([
            'display_name' => '',
            'name' => 'registrar-logros',
            'descripcion' => 'Permite registrar un logro en el sistema',
        ]);

        Permiso::create([
            'display_name' => '',
            'name' => 'ver-logros',
            'descripcion' => 'Permite ver el detalle de un logro en el sistema',
        ]);

        Permiso::create([
            'display_name' => '',
            'name' => 'modificar-logros',
            'descripcion' => 'Permite modificar un logro en el sistema',
        ]);

        Permiso::create([
            'display_name' => '',
            'name' => 'eliminar-logros',
            'descripcion' => 'Permite eliminar un logro en el sistema',
        ]);

        //Redes sociales
        Permiso::create([
            'display_name' => '',
            'name' => 'consultar-redes',
            'descripcion' => 'Consultar las redes sociales del postulante',
        ]);

        Permiso::create([
            'display_name' => '',
            'name' => 'registrar-redes',
            'descripcion' => 'Permite registrar una red social en el sistema',
        ]);

        Permiso::create([
            'display_name' => '',
            'name' => 'ver-redes',
            'descripcion' => 'Permite ver el detalle de una red social logro en el sistema',
        ]);

        Permiso::create([
            'display_name' => '',
            'name' => 'modificar-redes',
            'descripcion' => 'Permite modificar una red social en el sistema',
        ]);

        Permiso::create([
            'display_name' => '',
            'name' => 'eliminar-redes',
            'descripcion' => 'Permite eliminar una red social en el sistema',
        ]);

        //Recomendaciones
        Permiso::create([
            'display_name' => '',
            'name' => 'consultar-recomendaciones',
            'descripcion' => 'Consultar las recomendaciones del postulante',
        ]);

        Permiso::create([
            'display_name' => '',
            'name' => 'registrar-recomendaciones',
            'descripcion' => 'Permite registrar una recomendación en el sistema',
        ]);

        Permiso::create([
            'display_name' => '',
            'name' => 'ver-recomendaciones',
            'descripcion' => 'Permite ver el detalle de una recomendación en el sistema',
        ]);

        Permiso::create([
            'display_name' => '',
            'name' => 'modificar-recomendaciones',
            'descripcion' => 'Permite modificar una recomendación en el sistema',
        ]);

        Permiso::create([
            'display_name' => '',
            'name' => 'eliminar-recomendaciones',
            'descripcion' => 'Permite eliminar una recomendación en el sistema',
        ]);

        //Publicaciones
        Permiso::create([
            'display_name' => '',
            'name' => 'consultar-publicaciones',
            'descripcion' => 'Consultar las publicaciones del postulante',
        ]);

        Permiso::create([
            'display_name' => '',
            'name' => 'registrar-publicaciones',
            'descripcion' => 'Permite registrar una publicación en el sistema',
        ]);

        Permiso::create([
            'display_name' => '',
            'name' => 'ver-publicaciones',
            'descripcion' => 'Permite ver el detalle de una publicación en el sistema',
        ]);

        Permiso::create([
            'display_name' => '',
            'name' => 'modificar-publicaciones',
            'descripcion' => 'Permite modificar una publicación en el sistema',
        ]);

        Permiso::create([
            'display_name' => '',
            'name' => 'eliminar-publicaciones',
            'descripcion' => 'Permite eliminar una publicación en el sistema',
        ]);

        //Eventos
        Permiso::create([
            'display_name' => '',
            'name' => 'consultar-eventos',
            'descripcion' => 'Consultar los eventos a los que ha asistido el postulante',
        ]);

        Permiso::create([
            'display_name' => '',
            'name' => 'registrar-eventos',
            'descripcion' => 'Permite registrar un evento en el sistema',
        ]);

        Permiso::create([
            'display_name' => '',
            'name' => 'ver-eventos',
            'descripcion' => 'Permite ver el detalle de evento en el sistema',
        ]);

        Permiso::create([
            'display_name' => '',
            'name' => 'modificar-eventos',
            'descripcion' => 'Permite modificar un evento en el sistema',
        ]);

        Permiso::create([
            'display_name' => '',
            'name' => 'eliminar-eventos',
            'descripcion' => 'Permite eliminar un evento en el sistema',
        ]);

        //Certificaciones
        Permiso::create([
            'display_name' => '',
            'name' => 'consultar-certificaciones',
            'descripcion' => 'Consultar las certificaciones del postulante',
        ]);

        Permiso::create([
            'display_name' => '',
            'name' => 'registrar-certificaciones',
            'descripcion' => 'Permite registrar una certificación en el sistema',
        ]);

        Permiso::create([
            'display_name' => '',
            'name' => 'ver-certificaciones',
            'descripcion' => 'Permite ver el detalle de una certificación en el sistema',
        ]);

        Permiso::create([
            'display_name' => '',
            'name' => 'modificar-certificaciones',
            'descripcion' => 'Permite modificar una certificación en el sistema',
        ]);

        Permiso::create([
            'display_name' => '',
            'name' => 'eliminar-certificaciones',
            'descripcion' => 'Permite eliminar una certificación  en el sistema',
        ]);

        //Conocimientos
        Permiso::create([
            'display_name' => '',
            'name' => 'consultar-conocimientos',
            'descripcion' => 'Consultar los conocimientos del postulante',
        ]);

        Permiso::create([
            'display_name' => '',
            'name' => 'registrar-conocimientos',
            'descripcion' => 'Permite registrar un conocimiento en el sistema',
        ]);

        Permiso::create([
            'display_name' => '',
            'name' => 'ver-conocimientos',
            'descripcion' => 'Permite ver el detalle de conocimiento en el sistema',
        ]);

        Permiso::create([
            'display_name' => '',
            'name' => 'modificar-conocimientos',
            'descripcion' => 'Permite modificar un conocimiento en el sistema',
        ]);

        Permiso::create([
            'display_name' => '',
            'name' => 'eliminar-conocimientos',
            'descripcion' => 'Permite eliminar un conocimiento en el sistema',
        ]);

        //Idiomas
        Permiso::create([
            'display_name' => '',
            'name' => 'consultar-idiomas',
            'descripcion' => 'Consultar los idiomas que conoce el postulante',
        ]);

        Permiso::create([
            'display_name' => '',
            'name' => 'registrar-idiomas',
            'descripcion' => 'Permite registrar un idioma en el sistema',
        ]);

        Permiso::create([
            'display_name' => '',
            'name' => 'ver-idiomas',
            'descripcion' => 'Permite ver el detalle de idioma en el sistema',
        ]);

        Permiso::create([
            'display_name' => '',
            'name' => 'modificar-idiomas',
            'descripcion' => 'Permite modificar un idioma en el sistema',
        ]);

        Permiso::create([
            'display_name' => '',
            'name' => 'eliminar-idiomas',
            'descripcion' => 'Permite eliminar un idioma en el sistema',
        ]);

        //Experiencia laboral
        Permiso::create([
            'display_name' => '',
            'name' => 'consultar-experiencia',
            'descripcion' => 'Consultar la experiencia laboral del postulante',
        ]);

        Permiso::create([
            'display_name' => '',
            'name' => 'registrar-experiencia',
            'descripcion' => 'Permite registrar una experiencia laboral en el sistema',
        ]);

        Permiso::create([
            'display_name' => '',
            'name' => 'ver-experiencia',
            'descripcion' => 'Permite ver el detalle de experiencia laboral en el sistema',
        ]);

        Permiso::create([
            'display_name' => '',
            'name' => 'modificar-experiencia',
            'descripcion' => 'Permite modificar una experiencia laboral en el sistema',
        ]);

        Permiso::create([
            'display_name' => '',
            'name' => 'eliminar-experiencia',
            'descripcion' => 'Permite eliminar una experiencia laboral en el sistema',
        ]);

        //Direcciones
        Permiso::create([
            'display_name' => '',
            'name' => 'consultar-direccion',
            'descripcion' => 'Consultar los  del postulante',
        ]);

        Permiso::create([
            'display_name' => '',
            'name' => 'registrar-direccion',
            'descripcion' => 'Permite registrar una direccion en el sistema',
        ]);

        Permiso::create([
            'display_name' => '',
            'name' => 'ver-direccion',
            'descripcion' => 'Permite ver el detalle de una direccion en el sistema',
        ]);

        Permiso::create([
            'display_name' => '',
            'name' => 'modificar-direccion',
            'descripcion' => 'Permite modificar una direccion en el sistema',
        ]);

        Permiso::create([
            'display_name' => '',
            'name' => 'eliminar-direccion',
            'descripcion' => 'Permite eliminar una direccion en el sistema',
        ]);

        //Aplicacion a ofertas
        Permiso::create([
            'display_name' => '',
            'name' => 'consultar-aplicacion',
            'descripcion' => 'Consultar las ofertas a las que se ha postulado el usuario',
        ]);

        Permiso::create([
            'display_name' => '',
            'name' => 'registrar-aplicacion',
            'descripcion' => 'Permite al usuario aplicar a un oferta de trabajo',
        ]);

        Permiso::create([
            'display_name' => '',
            'name' => 'ver-aplicacion',
            'descripcion' => 'Permite ver el detalle de una aplicacion a oferta de trabajo en el sistema',
        ]);

        Permiso::create([
            'display_name' => '',
            'name' => 'modificar-aplicacion',
            'descripcion' => 'Permite modificar el estado de la aplicación del postulante',
        ]);

        Permiso::create([
            'display_name' => '',
            'name' => 'eliminar-aplicacion',
            'descripcion' => 'Permite eliminar a un postulante de la la oferta de trabajo',
        ]);

        //Perfiles
        Permiso::create([
            'display_name' => '',
            'name' => 'consultar-perfil',
            'descripcion' => 'Consultar los perfiles de postulantes',
        ]);

        Permiso::create([
            'display_name' => '',
            'name' => 'registrar-perfil',
            'descripcion' => 'Permite registrar un  en el sistema',
        ]);

        Permiso::create([
            'display_name' => '',
            'name' => 'ver-perfil',
            'descripcion' => 'Permite ver el detalle de un perfil en el sistema',
        ]);

        Permiso::create([
            'display_name' => '',
            'name' => 'modificar-perfil',
            'descripcion' => 'Permite al usuario modificar un/su perfil en el sistema',
        ]);

        Permiso::create([
            'display_name' => '',
            'name' => 'eliminar-perfil',
            'descripcion' => 'Permite eliminar un perfil en el sistema',
        ]);

        //Empresas
        Permiso::create([
            'display_name' => '',
            'name' => 'consultar-empresa',
            'descripcion' => 'Consultar el listado de empresas en el sistema',
        ]);

        Permiso::create([
            'display_name' => '',
            'name' => 'registrar-empresa',
            'descripcion' => 'Permite registrar una empresa en el sistema',
        ]);

        Permiso::create([
            'display_name' => '',
            'name' => 'ver-empresa',
            'descripcion' => 'Permite ver el detalle de una empresa en el sistema',
        ]);

        Permiso::create([
            'display_name' => '',
            'name' => 'modificar-empresa',
            'descripcion' => 'Permite modificar una empresa en el sistema',
        ]);

        Permiso::create([
            'display_name' => '',
            'name' => 'eliminar-empresa',
            'descripcion' => 'Permite eliminar una empresa en el sistema',
        ]);

        //Ofertas
        Permiso::create([
            'display_name' => '',
            'name' => 'consultar-ofertas',
            'descripcion' => 'Consultar las ofertas registradas en el sistema',
        ]);

        Permiso::create([
            'display_name' => '',
            'name' => 'registrar-ofertas',
            'descripcion' => 'Permite registrar una oferta de trabajo en el sistema',
        ]);

        Permiso::create([
            'display_name' => '',
            'name' => 'ver-ofertas',
            'descripcion' => 'Permite ver el detalle de una oferta en el sistema',
        ]);

        Permiso::create([
            'display_name' => '',
            'name' => 'modificar-ofertas',
            'descripcion' => 'Permite modificar una oferta en el sistema',
        ]);

        Permiso::create([
            'display_name' => '',
            'name' => 'eliminar-ofertas',
            'descripcion' => 'Permite eliminar una oferta en el sistema',
        ]);

        //Examenes
        Permiso::create([
            'display_name' => '',
            'name' => 'consultar-examenes',
            'descripcion' => 'Consultar los examenes de una empresa',
        ]);

        Permiso::create([
            'display_name' => '',
            'name' => 'registrar-examenes',
            'descripcion' => 'Permite registrar un examen en el sistema',
        ]);

        Permiso::create([
            'display_name' => '',
            'name' => 'ver-examenes',
            'descripcion' => 'Permite ver el detalle de examen en el sistema',
        ]);

        Permiso::create([
            'display_name' => '',
            'name' => 'modificar-examenes',
            'descripcion' => 'Permite modificar un examen en el sistema',
        ]);

        Permiso::create([
            'display_name' => '',
            'name' => 'eliminar-examenes',
            'descripcion' => 'Permite eliminar un examen en el sistema',
        ]);

        //Examen Oferta
        Permiso::create([
            'display_name' => '',
            'name' => 'consultar-asignacion-examen',
            'descripcion' => 'Consultar los examenes que han sido asignados una oferta',
        ]);

        Permiso::create([
            'display_name' => '',
            'name' => 'registrar-asignacion-examen',
            'descripcion' => 'Permite registrar un  en el sistema',
        ]);

        Permiso::create([
            'display_name' => '',
            'name' => 'ver-asignacion-examen',
            'descripcion' => 'Permite ver el detalle de un examen para una oferta',
        ]);

        Permiso::create([
            'display_name' => '',
            'name' => 'modificar-asignacion-examen',
            'descripcion' => 'Permite modificar el examen de una oferta',
        ]);

        Permiso::create([
            'display_name' => '',
            'name' => 'eliminar-asignacion-examen',
            'descripcion' => 'Permite eliminar un examen de una oferta',
        ]);

        //Resultado examen
        Permiso::create([
            'display_name' => '',
            'name' => 'consultar-resultado-examen',
            'descripcion' => 'Consultar los resultados para una examen',
        ]);

        Permiso::create([
            'display_name' => '',
            'name' => 'registrar-resultado-examen',
            'descripcion' => 'Permite realizar un examen en el sistema',
        ]);

        Permiso::create([
            'display_name' => '',
            'name' => 'ver-resultado-examen',
            'descripcion' => 'Permite ver el detalle/resultado de un examen en el sistema',
        ]);

        //No se utiliza
        Permiso::create([
            'display_name' => '',
            'name' => 'modificar-resultado-examen',
            'descripcion' => 'Permite modificar el resultado de una examen en el sistema',
        ]);

        Permiso::create([
            'display_name' => '',
            'name' => 'eliminar-resultado-examen',
            'descripcion' => 'Permite eliminar el resultado de un examen en el sistema',
        ]);
    }
}
