<?php

namespace App\Models\Usuario;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class TipoUsuario extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = 'tipo_usuario';

    public $timestamps = false;


    public function usuarios(): HasMany
    {
        return $this->hasMany(Usuario::class, 'id_tipo_usuario');
    }
}
