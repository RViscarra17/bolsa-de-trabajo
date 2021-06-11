<?php

namespace App\Models\Habilidad;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\Pivot;

class IdiomaPerfil extends Pivot
{
    protected $table = 'idioma_perfil';

    public $timestamps = false;

    public function detalles_idioma(): HasMany
    {
        return $this->hasMany(DetalleIdiomaPerfil::class, 'id_idioma_perfil');
    }
}
