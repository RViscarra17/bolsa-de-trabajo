<?php

namespace App\Models\Ubicacion;

use App\Models\Otro\Evento;
use App\Models\Usuario\Telefono;
use App\Models\Usuario\Usuario;
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

    public function eventos(): HasMany
    {
        return $this->hasMany(Evento::class, 'id_pais');
    }

    public function usuarios(): HasMany
    {
        return $this->hasMany(Usuario::class, 'id_pais');
    }
}
