<?php

namespace App\Models\Habilidad;

use App\Models\Oferta\Oferta;
use App\Models\Perfil\Perfil;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Habilidad extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = 'habilidad';


    public function categoria(): BelongsTo
    {
        return $this->belongsTo(CategoriaHabilidad::class, 'id_cat_habilidad');
    }

    public function perfiles(): BelongsToMany
    {
        return $this->belongsToMany(Perfil::class, 'habilidad_perfil', 'id_habilidad', 'id_perfil');
    }

    public function ofertas(): BelongsToMany
    {
        return $this->belongsToMany(Oferta::class, 'habilidad_oferta', 'id_habilidad', 'id_oferta');
    }
}
