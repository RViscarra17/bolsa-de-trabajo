<?php

namespace App\Models\Ubicacion;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Estado extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = 'estado';

    public $timestamps = false;

    public function ciudades(): HasMany
    {
        return $this->hasMany(Ciudad::class, 'id_estado');
    }

    public function pais(): BelongsTo
    {
        return $this->belongsTo(Pais::class, 'id_pais');
    }
}
