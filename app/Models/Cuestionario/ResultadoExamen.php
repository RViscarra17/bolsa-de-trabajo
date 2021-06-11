<?php

namespace App\Models\Cuestionario;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ResultadoExamen extends Model
{
    protected $guarded = ['id'];

    protected $table = 'resultado_examen';

    public $timestamps = false;


    public function setFechaRealizadoAttribute($value)
    {
        $this->attributes['fecha_realizado'] = isset($value) ? Carbon::createFromFormat(config('app.date_format'), $value)->format('Y-m-d') : null;
    }

    public function respuestas(): HasMany
    {
        return $this->hasMany(Respuesta::class, 'id_resultado_examen');
    }

    public function examen_oferta(): BelongsTo
    {
        return $this->belongsTo(ExamenOferta::class, 'id_examen_oferta');
    }
}
