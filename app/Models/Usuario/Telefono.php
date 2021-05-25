<?php

namespace App\Models\Usuario;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Telefono extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = 'telefono';


    public function usuario(): BelongsTo
    {
        return $this->belongsTo(Usuario::class, 'id_usuario');
    }

    public function tipo(): BelongsTo
    {
        return $this->belongsTo(TipoTelefono::class, 'id_tipo_telefono');
    }
}
