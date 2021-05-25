<?php

namespace App\Models\Usuario;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class TipoTelefono extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = 'tipo_telefono';

    public $timestamps = false;


    public function telefonos(): HasMany
    {
        return $this->hasMany(Telefono::class, 'id_tipo_telefono');
    }
}
