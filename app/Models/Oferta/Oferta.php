<?php

namespace App\Models\Oferta;

use App\Models\Cuestionario\ExamenOferta;
use App\Models\Educacion\TituloAcademico;
use App\Models\Habilidad\Habilidad;
use App\Models\Laboral\Puesto;
use App\Models\Ubicacion\Ciudad;
use App\Models\Usuario\Usuario;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Oferta extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = 'oferta';


    public function setFechaInicioAttribute($value)
    {
        $this->attributes['fecha_inicio'] = isset($value) ? Carbon::createFromFormat(config('app.date_format'), $value)->format('Y-m-d') : null;
    }

    public function setFechaFinAttribute($value)
    {
        $this->attributes['fecha_fin'] = isset($value) ? Carbon::createFromFormat(config('app.date_format'), $value)->format('Y-m-d') : null;
    }

    //Relaciones
    public function salario(): HasOne
    {
        return $this->hasOne(RangoSalario::class, 'id_oferta');
    }

    public function edad(): HasOne
    {
        return $this->hasOne(RangoEdad::class, 'id_oferta');
    }

    public function examen_oferta(): HasMany
    {
        return $this->hasMany(ExamenOferta::class, 'examen_oferta', 'id_oferta');
    }

    public function empresa(): BelongsTo
    {
        return $this->belongsTo(Empresa::class, 'id_empresa');
    }

    public function puesto(): BelongsTo
    {
        return $this->belongsTo(Puesto::class, 'id_puesto');
    }

    public function ciudad(): BelongsTo
    {
        return $this->belongsTo(Ciudad::class, 'id_ciudad');
    }

    public function habilidades(): BelongsToMany
    {
        return $this->belongsToMany(Habilidad::class, 'habilidad_oferta', 'id_oferta', 'id_habilidad')
            ->withPivot('experiencia')
            ->as('detalle');
    }

    public function titulos(): BelongsToMany
    {
        return $this->belongsToMany(TituloAcademico::class, 'oferta_titulo_academico', 'id_oferta', 'id_titulo')
            ->withPivot('nivel_minimo')
            ->as('detalle');
    }

    public function usuarios(): BelongsToMany
    {
        return $this->belongsToMany(Usuario::class, 'aplica_a', 'id_oferta', 'id_usuario')
            ->using(Aplica::class)
            ->withPivot('fecha_ap', 'id_estado_ap')
            ->as('aplicacion');
    }
}
