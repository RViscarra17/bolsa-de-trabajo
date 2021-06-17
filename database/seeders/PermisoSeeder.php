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
            'display_name' => 'Consultar telefonos',
            'name' => 'consultar-telefonos',
            'descripcion' => 'Consultar los telefonos del usuario',
        ]);

        Permiso::create([
            'display_name' => 'Registrar telefonos',
            'name' => 'registrar-telefonos',
            'descripcion' => 'Permite registrar un  en el sistema',
        ]);

        Permiso::create([
            'display_name' => 'Ver telefonos',
            'name' => 'ver-telefonos',
            'descripcion' => 'Permite ver el detalle de   en el sistema',
        ]);

        Permiso::create([
            'display_name' => 'Modificar telefonos',
            'name' => 'modificar-telefonos',
            'descripcion' => 'Permite modificar un  en el sistema',
        ]);

        Permiso::create([
            'display_name' => 'Eliminar telefonos',
            'name' => 'eliminar-telefonos',
            'descripcion' => 'Permite eliminar un  en el sistema',
        ]);
        //5

        //Logros
        Permiso::create([
            'display_name' => 'Consultar logros',
            'name' => 'consultar-logros',
            'descripcion' => 'Consultar los logros del postulante',
        ]);

        Permiso::create([
            'display_name' => 'Registrar logros',
            'name' => 'registrar-logros',
            'descripcion' => 'Permite registrar un logro en el sistema',
        ]);

        Permiso::create([
            'display_name' => 'Ver logros',
            'name' => 'ver-logros',
            'descripcion' => 'Permite ver el detalle de un logro en el sistema',
        ]);

        Permiso::create([
            'display_name' => 'Modificar logros',
            'name' => 'modificar-logros',
            'descripcion' => 'Permite modificar un logro en el sistema',
        ]);

        Permiso::create([
            'display_name' => 'Eliminar logros',
            'name' => 'eliminar-logros',
            'descripcion' => 'Permite eliminar un logro en el sistema',
        ]);
        //10

        //Redes sociales
        Permiso::create([
            'display_name' => 'Consultar redes',
            'name' => 'consultar-redes',
            'descripcion' => 'Consultar las redes sociales del postulante',
        ]);

        Permiso::create([
            'display_name' => 'Registrar redes',
            'name' => 'registrar-redes',
            'descripcion' => 'Permite registrar una red social en el sistema',
        ]);

        Permiso::create([
            'display_name' => 'Ver redes',
            'name' => 'ver-redes',
            'descripcion' => 'Permite ver el detalle de una red social logro en el sistema',
        ]);

        Permiso::create([
            'display_name' => 'Modificar redes',
            'name' => 'modificar-redes',
            'descripcion' => 'Permite modificar una red social en el sistema',
        ]);

        Permiso::create([
            'display_name' => 'Eliminar redes',
            'name' => 'eliminar-redes',
            'descripcion' => 'Permite eliminar una red social en el sistema',
        ]);
        //15

        //Recomendaciones
        Permiso::create([
            'display_name' => 'Consultar recomendaciones',
            'name' => 'consultar-recomendaciones',
            'descripcion' => 'Consultar las recomendaciones del postulante',
        ]);

        Permiso::create([
            'display_name' => 'Registrar recomendaciones',
            'name' => 'registrar-recomendaciones',
            'descripcion' => 'Permite registrar una recomendación en el sistema',
        ]);

        Permiso::create([
            'display_name' => 'Ver recomendaciones',
            'name' => 'ver-recomendaciones',
            'descripcion' => 'Permite ver el detalle de una recomendación en el sistema',
        ]);

        Permiso::create([
            'display_name' => 'Modificar recomendaciones',
            'name' => 'modificar-recomendaciones',
            'descripcion' => 'Permite modificar una recomendación en el sistema',
        ]);

        Permiso::create([
            'display_name' => 'Eliminar recomendaciones',
            'name' => 'eliminar-recomendaciones',
            'descripcion' => 'Permite eliminar una recomendación en el sistema',
        ]);
        //20

        //Publicaciones
        Permiso::create([
            'display_name' => 'Consultar publicaciones',
            'name' => 'consultar-publicaciones',
            'descripcion' => 'Consultar las publicaciones del postulante',
        ]);

        Permiso::create([
            'display_name' => 'Registrar publicaciones',
            'name' => 'registrar-publicaciones',
            'descripcion' => 'Permite registrar una publicación en el sistema',
        ]);

        Permiso::create([
            'display_name' => 'Ver publicaciones',
            'name' => 'ver-publicaciones',
            'descripcion' => 'Permite ver el detalle de una publicación en el sistema',
        ]);

        Permiso::create([
            'display_name' => 'Modificar publicaciones',
            'name' => 'modificar-publicaciones',
            'descripcion' => 'Permite modificar una publicación en el sistema',
        ]);

        Permiso::create([
            'display_name' => 'Eliminar publicaciones',
            'name' => 'eliminar-publicaciones',
            'descripcion' => 'Permite eliminar una publicación en el sistema',
        ]);
        //25

        //Eventos
        Permiso::create([
            'display_name' => 'Consultar eventos',
            'name' => 'consultar-eventos',
            'descripcion' => 'Consultar los eventos a los que ha asistido el postulante',
        ]);

        Permiso::create([
            'display_name' => 'Registrar eventos',
            'name' => 'registrar-eventos',
            'descripcion' => 'Permite registrar un evento en el sistema',
        ]);

        Permiso::create([
            'display_name' => 'Ver eventos',
            'name' => 'ver-eventos',
            'descripcion' => 'Permite ver el detalle de evento en el sistema',
        ]);

        Permiso::create([
            'display_name' => 'Modificar eventos',
            'name' => 'modificar-eventos',
            'descripcion' => 'Permite modificar un evento en el sistema',
        ]);

        Permiso::create([
            'display_name' => 'Eliminar eventos',
            'name' => 'eliminar-eventos',
            'descripcion' => 'Permite eliminar un evento en el sistema',
        ]);
        //30

        //Certificaciones
        Permiso::create([
            'display_name' => 'Consultar certificaciones',
            'name' => 'consultar-certificaciones',
            'descripcion' => 'Consultar las certificaciones del postulante',
        ]);

        Permiso::create([
            'display_name' => 'Registrar certificaciones',
            'name' => 'registrar-certificaciones',
            'descripcion' => 'Permite registrar una certificación en el sistema',
        ]);

        Permiso::create([
            'display_name' => 'Ver certificaciones',
            'name' => 'ver-certificaciones',
            'descripcion' => 'Permite ver el detalle de una certificación en el sistema',
        ]);

        Permiso::create([
            'display_name' => 'Modificar certificaciones',
            'name' => 'modificar-certificaciones',
            'descripcion' => 'Permite modificar una certificación en el sistema',
        ]);

        Permiso::create([
            'display_name' => 'Eliminar certificaciones',
            'name' => 'eliminar-certificaciones',
            'descripcion' => 'Permite eliminar una certificación  en el sistema',
        ]);
        //35

        //Conocimientos
        Permiso::create([
            'display_name' => 'Consultar conocimientos',
            'name' => 'consultar-conocimientos',
            'descripcion' => 'Consultar los conocimientos del postulante',
        ]);

        Permiso::create([
            'display_name' => 'Registrar conocimientos',
            'name' => 'registrar-conocimientos',
            'descripcion' => 'Permite registrar un conocimiento en el sistema',
        ]);

        Permiso::create([
            'display_name' => 'Ver conocimientos',
            'name' => 'ver-conocimientos',
            'descripcion' => 'Permite ver el detalle de conocimiento en el sistema',
        ]);

        Permiso::create([
            'display_name' => 'Modificar conocimientos',
            'name' => 'modificar-conocimientos',
            'descripcion' => 'Permite modificar un conocimiento en el sistema',
        ]);

        Permiso::create([
            'display_name' => 'Eliminar conocimientos',
            'name' => 'eliminar-conocimientos',
            'descripcion' => 'Permite eliminar un conocimiento en el sistema',
        ]);
        //40

        //Idiomas
        Permiso::create([
            'display_name' => 'Consultar idiomas',
            'name' => 'consultar-idiomas',
            'descripcion' => 'Consultar los idiomas que conoce el postulante',
        ]);

        Permiso::create([
            'display_name' => 'Registrar idiomas',
            'name' => 'registrar-idiomas',
            'descripcion' => 'Permite registrar un idioma en el sistema',
        ]);

        Permiso::create([
            'display_name' => 'Ver idiomas',
            'name' => 'ver-idiomas',
            'descripcion' => 'Permite ver el detalle de idioma en el sistema',
        ]);

        Permiso::create([
            'display_name' => 'Modificar idiomas',
            'name' => 'modificar-idiomas',
            'descripcion' => 'Permite modificar un idioma en el sistema',
        ]);

        Permiso::create([
            'display_name' => 'Eliminar idiomas',
            'name' => 'eliminar-idiomas',
            'descripcion' => 'Permite eliminar un idioma en el sistema',
        ]);
        //45

        //Experiencia laboral
        Permiso::create([
            'display_name' => 'Consultar experiencia',
            'name' => 'consultar-experiencia',
            'descripcion' => 'Consultar la experiencia laboral del postulante',
        ]);

        Permiso::create([
            'display_name' => 'Registrar experiencia',
            'name' => 'registrar-experiencia',
            'descripcion' => 'Permite registrar una experiencia laboral en el sistema',
        ]);

        Permiso::create([
            'display_name' => 'Ver experiencia',
            'name' => 'ver-experiencia',
            'descripcion' => 'Permite ver el detalle de experiencia laboral en el sistema',
        ]);

        Permiso::create([
            'display_name' => 'Modificar experiencia',
            'name' => 'modificar-experiencia',
            'descripcion' => 'Permite modificar una experiencia laboral en el sistema',
        ]);

        Permiso::create([
            'display_name' => 'Eliminar experiencia',
            'name' => 'eliminar-experiencia',
            'descripcion' => 'Permite eliminar una experiencia laboral en el sistema',
        ]);
        //50

        //Direcciones
        Permiso::create([
            'display_name' => 'Consultar direccion',
            'name' => 'consultar-direccion',
            'descripcion' => 'Consultar los  del postulante',
        ]);

        Permiso::create([
            'display_name' => 'Registrar direccion',
            'name' => 'registrar-direccion',
            'descripcion' => 'Permite registrar una direccion en el sistema',
        ]);

        Permiso::create([
            'display_name' => 'Ver direccion',
            'name' => 'ver-direccion',
            'descripcion' => 'Permite ver el detalle de una direccion en el sistema',
        ]);

        Permiso::create([
            'display_name' => 'Modificar direccion',
            'name' => 'modificar-direccion',
            'descripcion' => 'Permite modificar una direccion en el sistema',
        ]);

        Permiso::create([
            'display_name' => 'Eliminar direccion',
            'name' => 'eliminar-direccion',
            'descripcion' => 'Permite eliminar una direccion en el sistema',
        ]);
        //55

        //Aplicacion a ofertas
        Permiso::create([
            'display_name' => 'Consultar aplicacion',
            'name' => 'consultar-aplicacion',
            'descripcion' => 'Consultar las ofertas a las que se ha postulado el usuario',
        ]);

        Permiso::create([
            'display_name' => 'Registrar aplicacion',
            'name' => 'registrar-aplicacion',
            'descripcion' => 'Permite al usuario aplicar a un oferta de trabajo',
        ]);

        Permiso::create([
            'display_name' => 'Ver aplicacion',
            'name' => 'ver-aplicacion',
            'descripcion' => 'Permite ver el detalle de una aplicacion a oferta de trabajo en el sistema',
        ]);

        Permiso::create([
            'display_name' => 'Modificar aplicacion',
            'name' => 'modificar-aplicacion',
            'descripcion' => 'Permite modificar el estado de la aplicación del postulante',
        ]);

        Permiso::create([
            'display_name' => 'Eliminar aplicacion',
            'name' => 'eliminar-aplicacion',
            'descripcion' => 'Permite eliminar a un postulante de la la oferta de trabajo',
        ]);
        //60

        //Perfiles
        Permiso::create([
            'display_name' => 'Consultar perfil',
            'name' => 'consultar-perfil',
            'descripcion' => 'Consultar los perfiles de postulantes',
        ]);

        Permiso::create([
            'display_name' => 'Registrar perfil',
            'name' => 'registrar-perfil',
            'descripcion' => 'Permite registrar un  en el sistema',
        ]);

        Permiso::create([
            'display_name' => 'Ver perfil',
            'name' => 'ver-perfil',
            'descripcion' => 'Permite ver el detalle de un perfil en el sistema',
        ]);

        Permiso::create([
            'display_name' => 'Modificar perfil',
            'name' => 'modificar-perfil',
            'descripcion' => 'Permite al usuario modificar un/su perfil en el sistema',
        ]);

        Permiso::create([
            'display_name' => 'Eliminar perfil',
            'name' => 'eliminar-perfil',
            'descripcion' => 'Permite eliminar un perfil en el sistema',
        ]);
        //65

        //Empresas
        Permiso::create([
            'display_name' => 'Consultar empresa',
            'name' => 'consultar-empresa',
            'descripcion' => 'Consultar el listado de empresas en el sistema',
        ]);

        Permiso::create([
            'display_name' => 'Registrar empresa',
            'name' => 'registrar-empresa',
            'descripcion' => 'Permite registrar una empresa en el sistema',
        ]);

        Permiso::create([
            'display_name' => 'Ver empresa',
            'name' => 'ver-empresa',
            'descripcion' => 'Permite ver el detalle de una empresa en el sistema',
        ]);

        Permiso::create([
            'display_name' => 'Modificar empresa',
            'name' => 'modificar-empresa',
            'descripcion' => 'Permite modificar una empresa en el sistema',
        ]);

        Permiso::create([
            'display_name' => 'Eliminar empresa',
            'name' => 'eliminar-empresa',
            'descripcion' => 'Permite eliminar una empresa en el sistema',
        ]);
        //70

        //Ofertas
        Permiso::create([
            'display_name' => 'Consultar ofertas',
            'name' => 'consultar-ofertas',
            'descripcion' => 'Consultar las ofertas registradas en el sistema',
        ]);

        Permiso::create([
            'display_name' => 'Registrar ofertas',
            'name' => 'registrar-ofertas',
            'descripcion' => 'Permite registrar una oferta de trabajo en el sistema',
        ]);

        Permiso::create([
            'display_name' => 'Ver ofertas',
            'name' => 'ver-ofertas',
            'descripcion' => 'Permite ver el detalle de una oferta en el sistema',
        ]);

        Permiso::create([
            'display_name' => 'Modificar ofertas',
            'name' => 'modificar-ofertas',
            'descripcion' => 'Permite modificar una oferta en el sistema',
        ]);

        Permiso::create([
            'display_name' => 'Eliminar ofertas',
            'name' => 'eliminar-ofertas',
            'descripcion' => 'Permite eliminar una oferta en el sistema',
        ]);
        //75

        //Examenes
        Permiso::create([
            'display_name' => 'Consultar examenes',
            'name' => 'consultar-examenes',
            'descripcion' => 'Consultar los examenes de una empresa',
        ]);

        Permiso::create([
            'display_name' => 'Registrar examenes',
            'name' => 'registrar-examenes',
            'descripcion' => 'Permite registrar un examen en el sistema',
        ]);

        Permiso::create([
            'display_name' => 'Ver examenes',
            'name' => 'ver-examenes',
            'descripcion' => 'Permite ver el detalle de examen en el sistema',
        ]);

        Permiso::create([
            'display_name' => 'Modificar examenes',
            'name' => 'modificar-examenes',
            'descripcion' => 'Permite modificar un examen en el sistema',
        ]);

        Permiso::create([
            'display_name' => 'Eliminar examenes',
            'name' => 'eliminar-examenes',
            'descripcion' => 'Permite eliminar un examen en el sistema',
        ]);
        //80

        //Examen Oferta
        Permiso::create([
            'display_name' => 'Consultar asignacion-examen',
            'name' => 'consultar-asignacion-examen',
            'descripcion' => 'Consultar los examenes que han sido asignados una oferta',
        ]);

        Permiso::create([
            'display_name' => 'Registrar asignacion-examen',
            'name' => 'registrar-asignacion-examen',
            'descripcion' => 'Permite asignar una examen a una oferta en el sistema',
        ]);

        Permiso::create([
            'display_name' => 'Ver asignacion-examen',
            'name' => 'ver-asignacion-examen',
            'descripcion' => 'Permite ver el detalle de un examen para una oferta',
        ]);

        Permiso::create([
            'display_name' => 'Modificar asignacion-examen',
            'name' => 'modificar-asignacion-examen',
            'descripcion' => 'Permite modificar el examen de una oferta',
        ]);

        Permiso::create([
            'display_name' => 'Eliminar asignacion-examen',
            'name' => 'eliminar-asignacion-examen',
            'descripcion' => 'Permite eliminar un examen de una oferta',
        ]);
        //85

        //Resultado examen
        Permiso::create([
            'display_name' => 'Consultar resultado-examen',
            'name' => 'consultar-resultado-examen',
            'descripcion' => 'Consultar los resultados para una examen',
        ]);

        Permiso::create([
            'display_name' => 'Registrar resultado-examen',
            'name' => 'registrar-resultado-examen',
            'descripcion' => 'Permite realizar un examen en el sistema',
        ]);

        Permiso::create([
            'display_name' => 'Ver resultado-examen',
            'name' => 'ver-resultado-examen',
            'descripcion' => 'Permite ver el detalle/resultado de un examen en el sistema',
        ]);

        Permiso::create([
            'display_name' => 'Modificar resultado-examen',
            'name' => 'modificar-resultado-examen',
            'descripcion' => 'Permite modificar el resultado de una examen en el sistema',
        ]);

        Permiso::create([
            'display_name' => 'Eliminar resultado-examen',
            'name' => 'eliminar-resultado-examen',
            'descripcion' => 'Permite eliminar el resultado de un examen en el sistema',
        ]);
        //90
    }
}
