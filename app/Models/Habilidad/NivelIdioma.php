<?php

namespace App\Models\Habilidad;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class NivelIdioma extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = 'nivel_idioma';

    public $timestamps = false;

    public function categoria(): BelongsTo
    {
        return $this->belongsTo(TipoNivel::class, 'id_tipo_nivel');
    }
}
