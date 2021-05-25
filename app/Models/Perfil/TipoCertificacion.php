<?php

namespace App\Models\Perfil;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class TipoCertificacion extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = 'tipo_certificacion';

    public $timestamps = false;


    public function certificaciones(): HasMany
    {
        return $this->hasMany(Certificacion::class, 'id_tipo_cert');
    }
}
