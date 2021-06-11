<?php

namespace App\Models\Cuestionario;

use App\Models\Oferta\Oferta;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ExamenOferta extends Model
{
    protected $guarded = ['id'];

    protected $table = 'examen_oferta';

    public $timestamps = false;

    public function oferta(): BelongsTo
    {
        return $this->belongsTo(Oferta::class, 'id_oferta');
    }

    public function examen(): BelongsTo
    {
        return $this->belongsTo(Examen::class, 'id_examen');
    }

    public function resultados(): HasMany
    {
        return $this->hasMany(ResultadoExamen::class, 'id_examen_oferta');
    }
}
