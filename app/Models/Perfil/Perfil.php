<?php

namespace App\Models\Perfil;

use App\Models\Educacion\Certificacion;
use App\Models\Educacion\Conocimiento;
use App\Models\Otro\Recomendacion;
use App\Models\Otro\Publicacion;
use App\Models\Otro\Logro;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Perfil extends Model
{
    use HasFactory;
    public function logros(): HasMany
    {
        return $this->hasMany(Logro::class, 'id_perfil');
    }
    public function recomendaciones(): HasMany
    {
        return $this->hasMany(Recomendacion::class, 'id_perfil');
    }
    public function publicaciones(): HasMany
    {
        return $this->hasMany(Publicacion::class, 'id_perfil');
    }
    public function evento(): HasMany
    {
        return $this->hasMany(Evento::class, 'id_perfil');
    }
    public function certificaciones(): HasMany
    {
        return $this->hasMany(Certificacion::class, 'id_perfil');
    }
    public function conocimientos(): HasMany
    {
        return $this->hasMany(Conocimiento::class, 'id_perfil');
    }
}
