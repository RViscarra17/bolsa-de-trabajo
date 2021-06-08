<?php

namespace App\Models\Habilidad;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HabilidadIdioma extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = 'habilidad_idioma';
}
