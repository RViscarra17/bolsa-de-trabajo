<?php

namespace App\Models\Ubicacion;

use App\Models\Usuario\Telefono;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pais extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = 'pais';

    public $timestamps = false;


    public function estados(): HasMany
    {
        return $this->hasMany(Estado::class, 'id_pais');
    }

    public function telefonos(): HasMany
    {
        return $this->hasMany(Telefono::class, 'id_pais');
    }
}
