<?php

namespace App\Models\Cuestionario;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class TipoPregunta extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = 'tipo_pregunta';

    public $timestamps = false;


    public function preguntas(): HasMany
    {
        return $this->hasMany(Pregunta::class, 'id_tipo_pregunta');
    }
}
