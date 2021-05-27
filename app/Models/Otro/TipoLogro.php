<?php

namespace App\Models\Otro;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class TipoLogro extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = 'tipo_logro';

    public $timestamps = false;


    public function logros(): HasMany
    {
        return $this->hasMany(Logro::class, 'id_tipo_logro');
    }
}
