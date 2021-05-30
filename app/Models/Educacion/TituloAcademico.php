<?php

namespace App\Models\Educacion;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TituloAcademico extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $table = 'titulo_academico';

    public function categoria(): BelongsTo
    {
          return $this->belongsTo(CategoriaTitulo::class, 'id_cat_titulo');
    }
    public function conocimientos(): HasMany
    {
        return $this->hasMany(Conocimiento::class, 'id_titulo_ac');
    }
}
