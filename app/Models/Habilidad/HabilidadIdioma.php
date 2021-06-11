<?php

namespace App\Models\Habilidad;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class HabilidadIdioma extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = 'habilidad_idioma';

    public $timestamps = false;


    public function detalles_idioma(): HasMany
    {
        return $this->hasMany(DetalleIdiomaPerfil::class, 'id_hab_idioma');
    }
}
