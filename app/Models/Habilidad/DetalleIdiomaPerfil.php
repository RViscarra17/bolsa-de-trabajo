<?php

namespace App\Models\Habilidad;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DetalleIdiomaPerfil extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = 'detalle_idioma_perfil';

    public $timestamps = false;


    public function idioma_perfil(): BelongsTo
    {
        return $this->belongsTo(IdiomaPerfil::class, 'id_idioma_perfil');
    }

    public function nivel(): BelongsTo
    {
        return $this->belongsTo(NivelIdioma::class, 'id_nivel_idioma');
    }

    public function habilidad(): BelongsTo
    {
        return $this->belongsTo(HabilidadIdioma::class, 'id_hab_idioma');
    }
}
