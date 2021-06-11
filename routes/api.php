<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Usuario\RolController;
use App\Http\Controllers\Usuario\PermisoController;
use App\Http\Controllers\Usuario\TipoUsuarioController;
use App\Http\Controllers\Usuario\TipoTelefonoController;
use App\Http\Controllers\Usuario\RedSocialController;
use App\Http\Controllers\Usuario\TelefonoController;
use App\Http\Controllers\Usuario\RedUsuarioController;
use App\Http\Controllers\Oferta\SectorController;
use App\Http\Controllers\Oferta\CategoriaPuestoController;
use App\Http\Controllers\Otro\TipoLogroController;
use App\Http\Controllers\Otro\LogroController;
use App\Http\Controllers\Otro\RecomendacionController;
use App\Http\Controllers\Otro\PublicacionController;
use App\Http\Controllers\Otro\EventoController;
use App\Http\Controllers\Educacion\CategoriaTituloController;
use App\Http\Controllers\Habilidad\CategoriaHabilidadController;
use App\Http\Controllers\Cuestionario\TipoExamenController;
use App\Http\Controllers\Cuestionario\TipoPreguntaController;
use App\Http\Controllers\Educacion\TipoCertificacionController;
use App\Http\Controllers\Educacion\NivelAcademicoController;
use App\Http\Controllers\Educacion\InstitucionCertificadoraController;
use App\Http\Controllers\Educacion\CertificacionController;
use App\Http\Controllers\Educacion\ConocimientoController;
use App\Http\Controllers\Educacion\TituloAcademicoController;
use App\Http\Controllers\Habilidad\HabilidadController;
use App\Http\Controllers\Habilidad\NivelIdiomaController;
use App\Http\Controllers\Habilidad\IdiomaController;
use App\Http\Controllers\Habilidad\IdiomaPerfilController;
use App\Http\Controllers\Laboral\ExperienciaLaboralController;
use App\Http\Controllers\Oferta\AplicaController;
use App\Http\Controllers\Oferta\EmpresaController;
use App\Http\Controllers\Oferta\OfertaController;
use App\Http\Controllers\Perfil\PerfilController;
use App\Http\Controllers\Ubicacion\DireccionController;
use App\Http\Controllers\Usuario\UsuarioController;
use App\Http\Controllers\Utilidades\UtilidadesController;
// use App\Http\Controllers\Usuario\UsuarioController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Auth
Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);



/*Admin*/

Route::group(['middleware' => ['auth:sanctum']], function () {

    Route::post('logout', [AuthController::class, 'logout']);

    Route::get('user', [AuthController::class, 'user']);

    Route::group(['middleware' => 'is.admin'], function () {

        //Roles
        Route::get('/roles', [RolController::class, 'index'])->name('roles.index');

        Route::post('/roles', [RolController::class, 'store'])->name('roles.store');

        Route::get('/roles/{rol}', [RolController::class, 'show'])->name('roles.show');

        Route::put('/roles/{rol}', [RolController::class, 'update'])->name('roles.update');

        Route::delete('/roles/{rol}', [RolController::class, 'destroy'])->name('roles.destroy');

        //Permisos
        Route::get('/permisos', [PermisoController::class, 'index'])->name('permisos.index');

        Route::post('/permisos', [PermisoController::class, 'store'])->name('permisos.store');

        Route::get('/permisos/{permiso}', [PermisoController::class, 'show'])->name('permisos.show');

        Route::put('/permisos/{permiso}', [PermisoController::class, 'update'])->name('permisos.update');

        Route::delete('/permisos/{permiso}', [PermisoController::class, 'destroy'])->name('permisos.destroy');

        //Paises
        Route::get('/paises', [PaisController::class, 'index'])->name('paises.index');

        Route::post('/paises', [PaisController::class, 'store'])->name('paises.store');

        Route::get('/paises/{pais}', [PaisController::class, 'show'])->name('paises.show');

        Route::put('/paises/{pais}', [PaisController::class, 'update'])->name('paises.update');

        Route::delete('/paises/{pais}', [PaisController::class, 'destroy'])->name('paises.destroy');

        //Estados
        Route::get('/estados', [EstadoController::class, 'index'])->name('estados.index');

        Route::post('/estados', [EstadoController::class, 'store'])->name('estados.store');

        Route::get('/estados/{estado}', [EstadoController::class, 'show'])->name('estados.show');

        Route::put('/estados/{estado}', [EstadoController::class, 'update'])->name('estados.update');

        Route::delete('/estados/{estado}', [EstadoController::class, 'destroy'])->name('estados.destroy');

        //Ciudades
        Route::get('/ciudades', [CiudadController::class, 'index'])->name('ciudades.index');

        Route::post('/ciudades', [CiudadController::class, 'store'])->name('ciudades.store');

        Route::get('/ciudades/{ciudad}', [CiudadController::class, 'show'])->name('ciudades.show');

        Route::put('/ciudades/{ciudad}', [CiudadController::class, 'update'])->name('ciudades.update');

        Route::delete('/ciudades/{ciudad}', [CiudadController::class, 'destroy'])->name('ciudades.destroy');

        //Tipos de Usuario
        Route::get('/tipo-usuario', [TipoUsuarioController::class, 'index'])->name('tipo-usuario.index');

        Route::post('/tipo-usuario', [TipoUsuarioController::class, 'store'])->name('tipo-usuario.store');

        Route::get('/tipo-usuario/{tipo}', [TipoUsuarioController::class, 'show'])->name('tipo-usuario.show');

        Route::put('/tipo-usuario/{tipo}', [TipoUsuarioController::class, 'update'])->name('tipo-usuario.update');

        Route::delete('/tipo-usuario/{tipo}', [TipoUsuarioController::class, 'destroy'])->name('tipo-usuario.destroy');

        //Tipos de Telefono
        Route::get('/tipo-telefono', [TipoTelefonoController::class, 'index'])->name('tipo-telefono.index');

        Route::post('/tipo-telefono', [TipoTelefonoController::class, 'store'])->name('tipo-telefono.store');

        Route::get('/tipo-telefono/{tipo}', [TipoTelefonoController::class, 'show'])->name('tipo-telefono.show');

        Route::put('/tipo-telefono/{tipo}', [TipoTelefonoController::class, 'update'])->name('tipo-telefono.update');

        Route::delete('/tipo-telefono/{tipo}', [TipoTelefonoController::class, 'destroy'])->name('tipo-telefono.destroy');

        //Redes Sociales
        Route::get('/redes', [RedSocialController::class, 'index'])->name('redes.index');

        Route::post('/redes', [RedSocialController::class, 'store'])->name('redes.store');

        Route::get('/redes/{red}', [RedSocialController::class, 'show'])->name('redes.show');

        Route::put('/redes/{red}', [RedSocialController::class, 'update'])->name('redes.update');

        Route::delete('/redes/{red}', [RedSocialController::class, 'destroy'])->name('redes.destroy');

        //Sectores
        Route::get('/sectores', [SectorController::class, 'index'])->name('sectores.index');

        Route::post('/sectores', [SectorController::class, 'store'])->name('sectores.store');

        Route::get('/sectores/{sector}', [SectorController::class, 'show'])->name('sectores.show');

        Route::put('/sectores/{sector}', [SectorController::class, 'update'])->name('sectores.update');

        Route::delete('/sectores/{sector}', [SectorController::class, 'destroy'])->name('sectores.destroy');

        //Categorias de Puesto
        Route::get('/cat-puesto', [CategoriaPuestoController::class, 'index'])->name('cat-puesto.index');

        Route::post('/cat-puesto', [CategoriaPuestoController::class, 'store'])->name('cat-puesto.store');

        Route::get('/cat-puesto/{categoria}', [CategoriaPuestoController::class, 'show'])->name('cat-puesto.show');

        Route::put('/cat-puesto/{categoria}', [CategoriaPuestoController::class, 'update'])->name('cat-puesto.update');

        Route::delete('/cat-puesto/{categoria}', [CategoriaPuestoController::class, 'destroy'])->name('cat-puesto.destroy');

        //Tipo logro
        Route::get('/tipo-logro', [TipoLogroController::class, 'index'])->name('tipo-logro.index');

        Route::post('/tipo-logro', [TipoLogroController::class, 'store'])->name('tipo-logro.store');

        Route::get('/tipo-logro/{tipo}', [TipoLogroController::class, 'show'])->name('tipo-logro.show');

        Route::put('/tipo-logro/{tipo}', [TipoLogroController::class, 'update'])->name('tipo-logro.update');

        Route::delete('/tipo-logro/{tipo}', [TipoLogroController::class, 'destroy'])->name('tipo-logro.destroy');

        //Nivel academico
        Route::get('/nivel-ac', [NivelAcademicoController::class, 'index'])->name('nivel-ac.index');

        Route::post('/nivel-ac', [NivelAcademicoController::class, 'store'])->name('nivel-ac.store');

        Route::get('/nivel-ac/{nivel}', [NivelAcademicoController::class, 'show'])->name('nivel-ac.show');

        Route::put('/nivel-ac/{nivel}', [NivelAcademicoController::class, 'update'])->name('nivel-ac.update');

        Route::delete('/nivel-ac/{nivel}', [NivelAcademicoController::class, 'destroy'])->name('nivel-ac.destroy');

        //Categorias de Titulo
        Route::get('/cat-titulo', [CategoriaTituloController::class, 'index'])->name('cat-titulo.index');

        Route::post('/cat-titulo', [CategoriaTituloController::class, 'store'])->name('cat-titulo.store');

        Route::get('/cat-titulo/{categoria}', [CategoriaTituloController::class, 'show'])->name('cat-titulo.show');

        Route::put('/cat-titulo/{categoria}', [CategoriaTituloController::class, 'update'])->name('cat-titulo.update');

        Route::delete('/cat-titulo/{categoria}', [CategoriaTituloController::class, 'destroy'])->name('cat-titulo.destroy');

        //Tipos de Certificacion
        Route::get('/tipo-cert', [TipoCertificacionController::class, 'index'])->name('tipo-cert.index');

        Route::post('/tipo-cert', [TipoCertificacionController::class, 'store'])->name('tipo-cert.store');

        Route::get('/tipo-cert/{tipo}', [TipoCertificacionController::class, 'show'])->name('tipo-cert.show');

        Route::put('/tipo-cert/{tipo}', [TipoCertificacionController::class, 'update'])->name('tipo-cert.update');

        Route::delete('/tipo-cert/{tipo}', [TipoCertificacionController::class, 'destroy'])->name('tipo-cert.destroy');

        //Categorias de Habilidad
        Route::get('/cat-habilidad', [CategoriaHabilidadController::class, 'index'])->name('cat-habilidad.index');

        Route::post('/cat-habilidad', [CategoriaHabilidadController::class, 'store'])->name('cat-habilidad.store');

        Route::get('/cat-habilidad/{categoria}', [CategoriaHabilidadController::class, 'show'])->name('cat-habilidad.show');

        Route::put('/cat-habilidad/{categoria}', [CategoriaHabilidadController::class, 'update'])->name('cat-habilidad.update');

        Route::delete('/cat-habilidad/{categoria}', [CategoriaHabilidadController::class, 'destroy'])->name('cat-habilidad.destroy');

        //Tipos de Examen
        Route::get('/tipo-examen', [TipoExamenController::class, 'index'])->name('tipo-examen.index');

        Route::post('/tipo-examen', [TipoExamenController::class, 'store'])->name('tipo-examen.store');

        Route::get('/tipo-examen/{tipo}', [TipoExamenController::class, 'show'])->name('tipo-examen.show');

        Route::put('/tipo-examen/{tipo}', [TipoExamenController::class, 'update'])->name('tipo-examen.update');

        Route::delete('/tipo-examen/{tipo}', [TipoExamenController::class, 'destroy'])->name('tipo-examen.destroy');

        //Tipos de Pregunta
        Route::get('/tipo-pregunta', [TipoPreguntaController::class, 'index'])->name('tipo-pregunta.index');

        Route::post('/tipo-pregunta', [TipoPreguntaController::class, 'store'])->name('tipo-pregunta.store');

        Route::get('/tipo-pregunta/{tipo}', [TipoPreguntaController::class, 'show'])->name('tipo-pregunta.show');

        Route::put('/tipo-pregunta/{tipo}', [TipoPreguntaController::class, 'update'])->name('tipo-pregunta.update');

        Route::delete('/tipo-pregunta/{tipo}', [TipoPreguntaController::class, 'destroy'])->name('tipo-pregunta.destroy');

        //Institucion Certificadora
        Route::get('/instituciones-cert', [InstitucionCertificadoraController::class, 'index'])->name('instituciones-cert.index');

        Route::post('/instituciones-cert', [InstitucionCertificadoraController::class, 'store'])->name('instituciones-cert.store');

        Route::get('/instituciones-cert/{institucionCertificadora}', [InstitucionCertificadoraController::class, 'show'])->name('instituciones-cert.show');

        Route::put('/instituciones-cert/{institucionCertificadora}', [InstitucionCertificadoraController::class, 'update'])->name('instituciones-cert.update');

        Route::delete('/instituciones-cert/{institucionCertificadora}', [InstitucionCertificadoraController::class, 'delete'])->name('instituciones-cert.delete');

        //Titulo Academico
        Route::get('/titulos-academicos', [TituloAcademicoController::class, 'index'])->name('titulos-academicos.index');

        Route::post('/titulos-academicos', [TituloAcademicoController::class, 'store'])->name('titulos-academicos.store');

        Route::get('/titulos-academicos/{tituloAcademico}', [TituloAcademicoController::class, 'show'])->name('titulos-academicos.show');

        Route::put('/titulos-academicos/{tituloAcademico}', [TituloAcademicoController::class, 'update'])->name('titulos-academicos.update');

        Route::delete('/titulos-academicos/{tituloAcademico}', [TituloAcademicoController::class, 'delete'])->name('titulos-academicos.destroy');

        //Habilidad
        Route::get('/habilidades', [HabilidadController::class, 'index'])->name('habilidades.index');

        Route::post('/habilidades', [HabilidadController::class, 'store'])->name('habilidades.store');

        Route::get('/habilidades/{habilidad}', [HabilidadController::class, 'show'])->name('habilidades.show');

        Route::put('/habilidades/{habilidad}', [HabilidadController::class, 'update'])->name('habilidades.update');

        Route::delete('/habilidades/{habilidad}', [HabilidadController::class, 'destroy'])->name('habilidades.delete');

        //Nivel Idioma
        Route::get('/nivel-idiomas', [NivelIdiomaController::class, 'index'])->name('nivel-idiomas.index');

        Route::post('/nivel-idiomas', [NivelIdiomaController::class, 'store'])->name('nivel-idiomas.store');

        Route::get('/nivel-idiomas/{nivel_idioma}', [NivelIdiomaController::class, 'show'])->name('nivel-idiomas.show');

        Route::put('/nivel-idiomas/{nivel_idioma}', [NivelIdiomaController::class, 'update'])->name('nivel-idiomas.update');

        Route::delete('/nivel-idiomas/{nivel_idioma}', [NivelIdiomaController::class, 'destroy'])->name('nivel-idiomas.delete');

        //Idioma
        Route::get('/idiomas', [IdiomaController::class, 'index'])->name('idiomas.index');

        Route::post('/idiomas', [IdiomaController::class, 'store'])->name('idiomas.store');

        Route::get('/idiomas/{idioma}', [IdiomaController::class, 'show'])->name('idiomas.show');

        Route::put('/idiomas/{idioma}', [IdiomaController::class, 'update'])->name('idiomas.update');

        Route::delete('/idiomas/{idioma}', [IdiomaController::class, 'destroy'])->name('idiomas.delete');

        //Usuarios
        Route::get('/usuarios', [UsuarioController::class, 'index'])->name('usuarios.index');

        Route::post('/usuarios', [UsuarioController::class, 'store'])->name('usuarios.store');

        Route::get('/usuarios/{usuario}', [UsuarioController::class, 'show'])->name('usuarios.show');

        Route::put('/usuarios/{usuario}', [UsuarioController::class, 'update'])->name('usuarios.update');

        Route::delete('/usuarios/{usuario}', [UsuarioController::class, 'destroy'])->name('usuarios.delete');
    });
    /*Usuario*/

    //Telefonos

    Route::get('/telefonos', [TelefonoController::class, 'index'])->name('telefonos.index')
        ->middleware('can:consultar-telefono');

    Route::post('/telefonos', [TelefonoController::class, 'store'])->name('telefonos.store')
        ->middleware('can:registrar-telefono');

    Route::get('/telefonos/{telefono}', [TelefonoController::class, 'show'])->name('telefonos.show');

    Route::put('/telefonos/{telefono}', [TelefonoController::class, 'update'])->name('telefonos.update');

    Route::delete('/telefonos/{telefono}', [TelefonoController::class, 'destroy'])->name('telefonos.destroy');

    //Redes sociales

    Route::get('/redes-usuario', [RedUsuarioController::class, 'index'])->name('redes-usuario.index');

    Route::post('/redes-usuario', [RedUsuarioController::class, 'store'])->name('redes-usuario.store');

    Route::get('/redes-usuario/{usuario}', [RedUsuarioController::class, 'show'])->name('redes-usuario.show');

    Route::put('/redes-usuario/{usuario}', [RedUsuarioController::class, 'update'])->name('redes-usuario.update');

    Route::delete('/redes-usuario/{usuario}/{red}', [RedUsuarioController::class, 'destroy'])->name('redes-usuario.destroy');

    //Logros
    Route::get('/logros', [LogroController::class, 'index'])->name('logros.index');

    Route::post('/logros', [LogroController::class, 'store'])->name('logros.store');

    Route::get('/logros/{logro}', [LogroController::class, 'show'])->name('logros.show');

    Route::put('/logros/{logro}', [LogroController::class, 'update'])->name('logros.update');

    Route::delete('/logros/{logro}', [LogroController::class, 'destroy'])->name('logros.delete');

    //Recomendaciones
    Route::get('/recomendaciones', [RecomendacionController::class, 'index'])->name('recomendaciones.index');

    Route::post('/recomendaciones', [RecomendacionController::class, 'store'])->name('recomendaciones.store');

    Route::get('/recomendaciones/{recomendacion}', [RecomendacionController::class, 'show'])->name('recomendaciones.show');

    Route::put('/recomendaciones/{recomendacion}', [RecomendacionController::class, 'update'])->name('recomendaciones.update');

    Route::delete('/recomendaciones/{recomendacion}', [RecomendacionController::class, 'destroy'])->name('recomendaciones.delete');

    //Publicaciones
    Route::get('/publicaciones', [PublicacionController::class, 'index'])->name('publicaciones.index');

    Route::post('/publicaciones', [PublicacionController::class, 'store'])->name('publicaciones.store');

    Route::get('/publicaciones/{publicacion}', [PublicacionController::class, 'show'])->name('publicaciones.show');

    Route::put('/publicaciones/{publicacion}', [PublicacionController::class, 'update'])->name('publicaciones.update');

    Route::delete('/publicaciones/{publicacion}', [PublicacionController::class, 'destroy'])->name('publicaciones.delete');

    //Eventos
    Route::get('/eventos', [EventoController::class, 'index'])->name('eventos.index');

    Route::post('/eventos', [EventoController::class, 'store'])->name('eventos.store');

    Route::get('/eventos/{evento}', [EventoController::class, 'show'])->name('eventos.show');

    Route::put('/eventos/{evento}', [EventoController::class, 'update'])->name('eventos.update');

    Route::delete('/eventos/{evento}', [EventoController::class, 'destroy'])->name('eventos.delete');

    //Certificación
    Route::get('/certificaciones', [CertificacionController::class, 'index'])->name('certificaciones.index');

    Route::post('/certificaciones', [CertificacionController::class, 'store'])->name('certificaciones.store');

    Route::get('/certificaciones/{certificacion}', [CertificacionController::class, 'show'])->name('certificaciones.show');

    Route::put('/certificaciones/{certificacion}', [CertificacionController::class, 'update'])->name('certificaciones.update');

    Route::delete('/certificaciones/{certificacion}', [CertificacionController::class, 'destroy'])->name('certificaciones.delete');

    //Conocimiento
    Route::get('/conocimientos', [ConocimientoController::class, 'index'])->name('conocimientos.index');

    Route::post('/conocimientos', [ConocimientoController::class, 'store'])->name('conocimientos.store');

    Route::get('/conocimientos/{conocimiento}', [ConocimientoController::class, 'show'])->name('conocimientos.show');

    Route::put('/conocimientos/{conocimiento}', [ConocimientoController::class, 'update'])->name('conocimientos.update');

    Route::delete('/conocimientos/{conocimiento}', [ConocimientoController::class, 'destroy'])->name('conocimientos.delete');

    //Idiomas
    Route::get('/idiomas-perfil', [IdiomaPerfilController::class, 'index'])->name('idioma-perfil.index');

    Route::post('/idiomas-perfil', [IdiomaPerfilController::class, 'store'])->name('idioma-perfil.store');

    Route::get('/idiomas-perfil/{perfil}', [IdiomaPerfilController::class, 'show'])->name('idioma-perfil.show');

    Route::put('/idiomas-perfil/{perfil}', [IdiomaPerfilController::class, 'update'])->name('idioma-perfil.update');

    Route::delete('/idiomas-perfil/{perfil}/idioma/{idioma}', [IdiomaPerfilController::class, 'destroy'])->name('idioma-perfil.delete');

    //Usuario
    Route::get('/laborales', [ExperienciaLaboralController::class, 'index'])->name('laborales.index');

    Route::post('/laborales', [ExperienciaLaboralController::class, 'store'])->name('laborales.store');

    Route::get('/laborales/{experiencia}', [ExperienciaLaboralController::class, 'show'])->name('laborales.show');

    Route::put('/laborales/{experiencia}', [ExperienciaLaboralController::class, 'update'])->name('laborales.update');

    Route::delete('/laborales/{experiencia}', [ExperienciaLaboralController::class, 'destroy'])->name('laborales.delete');

    //Direccion
    Route::get('/direcciones', [DireccionController::class, 'index'])->name('direcciones.index');

    Route::post('/direcciones', [DireccionController::class, 'store'])->name('direcciones.store');

    Route::get('/direcciones/{direccion}', [DireccionController::class, 'show'])->name('direcciones.show');

    Route::put('/direcciones/{direccion}', [DireccionController::class, 'update'])->name('direcciones.update');

    Route::delete('/direcciones/{direccion}', [DireccionController::class, 'destroy'])->name('direcciones.delete');

    //Aplicacion a ofertas (Solo para los postulantes)
    Route::get('/aplicacion', [AplicaController::class, 'index'])->name('aplicacion.index');

    Route::post('/aplicacion', [AplicaController::class, 'store'])->name('aplicacion.store');

    Route::get('/aplicacion/{oferta}', [AplicaController::class, 'show'])->name('aplicacion.show');

    Route::put('/aplicacion/{oferta}', [AplicaController::class, 'update'])->name('aplicacion.update');

    Route::delete('/aplicacion/{oferta}', [AplicaController::class, 'destroy'])->name('aplicacion.delete');

    //Perfiles
    Route::get('/perfiles', [PerfilController::class, 'index'])->name('perfiles.index');

    Route::post('/perfiles', [PerfilController::class, 'store'])->name('perfiles.store');

    Route::get('/perfiles/{perfil}', [PerfilController::class, 'show'])->name('perfiles.show');

    Route::put('/perfiles/{perfil}', [PerfilController::class, 'update'])->name('perfiles.update');

    Route::delete('/perfiles/{perfil}', [PerfilController::class, 'destroy'])->name('perfiles.delete');

    //Empresas
    Route::get('/empresas', [EmpresaController::class, 'index'])->name('empresas.index');

    Route::post('/empresas', [EmpresaController::class, 'store'])->name('empresas.store');

    Route::get('/empresas/{empresa}', [EmpresaController::class, 'show'])->name('empresas.show');

    Route::put('/empresas/{empresa}', [EmpresaController::class, 'update'])->name('empresas.update');

    Route::delete('/empresas/{empresa}', [EmpresaController::class, 'destroy'])->name('empresas.delete');

    //Ofertas
    Route::get('/ofertas', [OfertaController::class, 'index'])->name('ofertas.index');

    Route::post('/ofertas', [OfertaController::class, 'store'])->name('ofertas.store');

    Route::get('/ofertas/{oferta}', [OfertaController::class, 'show'])->name('ofertas.show');

    Route::put('/ofertas/{oferta}', [OfertaController::class, 'update'])->name('ofertas.update');

    Route::delete('/ofertas/{oferta}', [OfertaController::class, 'destroy'])->name('ofertas.delete');

    //Utilidades
    Route::get('/utilidades/permisos', [UtilidadesController::class, 'permisos']);

    Route::get('/utilidades/usuario', [UtilidadesController::class, 'usuario']);

    Route::get('/utilidades/roles', [UtilidadesController::class, 'roles']);
});
