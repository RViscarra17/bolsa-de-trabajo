<?php

namespace App\Models\Habilidad;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class NivelIdioma extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = 'nivel_idioma';

    public $timestamps = false;


    public function detalles_idioma(): HasMany
    {
        return $this->hasMany(DetalleIdiomaPerfil::class, 'id_nivel_idioma');
    }

    public function categoria(): BelongsTo
    {
        return $this->belongsTo(TipoNivel::class, 'id_tipo_nivel');
    }
}
