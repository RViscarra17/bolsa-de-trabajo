<?php

namespace App\Models\Oferta;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class EstadoAplicacion extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = 'estado_aplicacion';

    public $timestamps = false;


    public function aplicaciones(): HasMany
    {
        return $this->hasMany(Aplica::class, 'id_estado_ap');
    }
}
