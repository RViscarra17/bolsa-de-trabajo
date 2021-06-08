<?php

namespace App\Models\Oferta;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Aplica extends Pivot
{
    protected $table = 'aplica_a';

    public function setFechaApAttribute($value)
    {
        $this->attributes['fecha_ap'] = isset($value) ? Carbon::createFromFormat(config('app.date_format'), $value)->format('Y-m-d') : null;
    }

    public function estado(): BelongsTo
    {
        return $this->belongsTo(EstadoAplicacion::class, 'id_estado_ap');
    }
}
