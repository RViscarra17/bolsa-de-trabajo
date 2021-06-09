<?php

namespace App\Models\Ubicacion;

use App\Models\Oferta\Oferta;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Ciudad extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = 'ciudad';

    public $timestamps = false;

    public function direcciones(): HasMany
    {
        return $this->hasMany(Direccion::class, 'id_ciudad');
    }

    public function ofertas(): HasMany
    {
        return $this->hasMany(Oferta::class, 'id_ciudad');
    }

    public function estado(): BelongsTo
    {
        return $this->belongsTo(Estado::class, 'id_estado');
    }
}
