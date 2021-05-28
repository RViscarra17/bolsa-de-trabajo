<?php

namespace App\Models\Otro;
use App\Models\Perfil\Perfil;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Publicacion extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    protected $table = 'publicacion';
    public function perfil(): BelongsTo
    {
        return $this->belongsTo(Perfil::class, 'id_perfil');
    }
}
