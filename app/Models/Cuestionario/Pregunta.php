<?php

namespace App\Models\Cuestionario;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pregunta extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = 'pregunta';

    public $timestamps = false;


    public function opcion(): HasMany
    {
        return $this->hasMany(Opcion::class, 'id_pregunta');
    }

    public function examen(): BelongsTo
    {
        return $this->belongsTo(Examen::class, 'id_examen');
    }

    public function tipo(): BelongsTo
    {
        return $this->belongsTo(TipoPregunta::class, 'id_tipo_pregunta');
    }
}
