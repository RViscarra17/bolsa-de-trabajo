<?php

namespace App\Models\Perfil;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class CategoriaTitulo extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = 'categoria_titulo';

    public $timestamps = false;


    public function titulos(): HasMany
    {
        return $this->hasMany(TituloAcademico::class, 'id_cat_titulo');
    }
}
