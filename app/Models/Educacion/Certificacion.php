<?php

namespace App\Models\Educacion;

use App\Models\Perfil\Perfil;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Certificacion extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $table = 'certificacion';

    public function perfil(): BelongsTo
    {
          return $this->belongsTo(Perfil::class, 'id_perfil');
    }
    public function tipo(): BelongsTo
    {
        return $this->belongsTo(TipoCertificacion::class, 'id_tipo_cert');
    }
    public function institucion(): BelongsTo
    {
        return $this->belongsTo(InstitucionCertificadora::class, 'id_institucion_cert');
    }
}
