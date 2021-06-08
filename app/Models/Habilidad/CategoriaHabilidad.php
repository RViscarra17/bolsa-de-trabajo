<?php

namespace App\Models\Habilidad;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;
use Oferta\CategoriaPuesto;

class CategoriaHabilidad extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = 'categoria_habilidad';

    public $timestamps = false;


    public function habilidades(): HasMany
    {
        return $this->hasMany(Habilidad::class, 'id_cat_habilidad');
    }
}
