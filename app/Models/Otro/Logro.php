<?php

namespace App\Models\Otro;

use App\Models\Perfil\Perfil;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Logro extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    protected $table = 'logro';
    public function perfil(): BelongsTo
    {
        return $this->belongsTo(Perfil::class, 'id_perfil');
    }

    public function tipo(): BelongsTo
    {
        return $this->belongsTo(TipoLogro::class, 'id_tipo_logro');
    }
}
