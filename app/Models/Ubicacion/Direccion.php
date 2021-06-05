<?php

namespace App\Models\Ubicacion;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Direccion extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = 'ciudad';

    public function usuario(): BelongsTo
    {
        return $this->belongsTo(Pais::class, 'id_usuario');
    }

    public function ciudad(): BelongsTo
    {
        return $this->belongsTo(Pais::class, 'id_ciudad');
    }
}
