<?php

namespace App\Models\Perfil;

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
        return $this->hasMany(Comment::class, 'foreign_key', 'local_key');
    }
}
