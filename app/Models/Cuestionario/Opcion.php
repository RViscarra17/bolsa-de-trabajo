<?php

namespace App\Models\Cuestionario;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Opcion extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = 'opcion';

    public $timestamps = false;


    public function respuestas(): HasMany
    {
        return $this->hasMany(Respuesta::class, 'id_opcion');
    }

    public function pregunta(): BelongsTo
    {
        return $this->belongsTo(Pregunta::class, 'id_pregunta');
    }
}
