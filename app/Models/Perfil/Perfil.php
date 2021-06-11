<?php

namespace App\Models\Perfil;

use App\Models\Educacion\Certificacion;
use App\Models\Educacion\Conocimiento;
use App\Models\Habilidad\Habilidad;
use App\Models\Habilidad\Idioma;
use App\Models\IdiomaPerfil;
use App\Models\Laboral\ExperienciaLaboral;
use App\Models\Otro\Evento;
use App\Models\Otro\Recomendacion;
use App\Models\Otro\Publicacion;
use App\Models\Otro\Logro;
use App\Models\Usuario\Usuario;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Perfil extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = 'perfil';

    public function setFechaNacimientoAttribute($value)
    {
        $this->attributes['fecha_nacimiento'] = isset($value) ? Carbon::createFromFormat(config('app.date_format'), $value)->format('Y-m-d') : null;
    }

    //Relaciones
    public function experiencia_laboral(): HasMany
    {
        return $this->hasMany(ExperienciaLaboral::class, 'id_perfil');
    }

    public function logros(): HasMany
    {
        return $this->hasMany(Logro::class, 'id_perfil');
    }

    public function recomendaciones(): HasMany
    {
        return $this->hasMany(Recomendacion::class, 'id_perfil');
    }

    public function publicaciones(): HasMany
    {
        return $this->hasMany(Publicacion::class, 'id_perfil');
    }

    public function evento(): HasMany
    {
        return $this->hasMany(Evento::class, 'id_perfil');
    }

    public function certificaciones(): HasMany
    {
        return $this->hasMany(Certificacion::class, 'id_perfil');
    }

    public function conocimientos(): HasMany
    {
        return $this->hasMany(Conocimiento::class, 'id_perfil');
    }

    public function usuario(): BelongsTo
    {
        return $this->belongsTo(Usuario::class, 'id_usuario');
    }

    public function habilidades(): BelongsToMany
    {
        return $this->belongsToMany(Habilidad::class, 'habilidad_perfil', 'id_perfil', 'id_habilidad')
            ->withPivot('experiencia')
            ->as('detalle');
    }

    public function idiomas(): BelongsToMany
    {
        return $this->belongsToMany(Idioma::class, 'idioma_perfil', 'id_perfil', 'id_idioma')
            ->using(IdiomaPerfil::class)
            ->as('detalle');
    }
}
