<?php

namespace App\Models\Laboral;

use App\Models\Perfil\Perfil;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ExperienciaLaboral extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = 'experiencia_laboral';


    public function setFechaDesdeAttribute($value)
    {
        $this->attributes['fecha_desde'] = isset($value) ? Carbon::createFromFormat(config('app.date_format'), $value)->format('Y-m-d') : null;
    }

    public function setFechaHastaAttribute($value)
    {
        $this->attributes['fecha_hasta'] = isset($value) ? Carbon::createFromFormat(config('app.date_format'), $value)->format('Y-m-d') : null;
    }

    //Relaciones
    public function perfil(): BelongsTo
    {
        return $this->belongsTo(Perfil::class, 'id_perfil');
    }

    public function puesto(): BelongsTo
    {
        return $this->belongsTo(Puesto::class, 'id_puesto');
    }
}
