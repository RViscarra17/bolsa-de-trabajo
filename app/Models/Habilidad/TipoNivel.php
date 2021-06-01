<?php

namespace App\Models\Habilidad;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class TipoNivel extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = 'tipo_nivel';

    public $timestamps = false;


    public function nivel_idioma(): HasMany
    {
        return $this->hasMany(NivelIdioma::class, 'id_tipo_nivel');
    }
}
