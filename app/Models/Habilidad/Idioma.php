<?php

namespace App\Models\Habilidad;

use App\Models\Perfil\Perfil;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Idioma extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = 'idioma';

    public function idiomas(): BelongsToMany
    {
        return $this->belongsToMany(Perfil::class, 'idioma_perfil', 'id_idioma', 'id_perfil')
            ->using(IdiomaPerfil::class)
            ->as('aplicacion');
    }
}
