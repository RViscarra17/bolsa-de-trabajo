<?php

namespace App\Models\Habilidad;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class IdiomaPerfil extends Pivot
{
    protected $table = 'idioma_perfil';
}
