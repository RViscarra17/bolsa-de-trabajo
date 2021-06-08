<?php

namespace App\Models\Oferta;

use App\Models\Usuario\Usuario;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Empresa extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = 'empresa';


    public function ofertas(): HasMany
    {
        return $this->hasMany(Oferta::class, 'id_empresa');
    }

    public function examenes(): HasMany
    {
        return $this->hasMany(Examen::class, 'id_empresa');
    }

    public function usuario(): BelongsTo
    {
        return $this->belongsTo(Usuario::class, 'id_usuario');
    }

    public function sector(): BelongsTo
    {
        return $this->belongsTo(Sector::class, 'id_sector');
    }
}
