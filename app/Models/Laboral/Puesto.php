<?php

namespace App\Models\Laboral;

use App\Models\Oferta;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Puesto extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = 'puesto';

    public $timestamps = false;


    public function experiencia_laboral(): HasMany
    {
        return $this->hasMany(ExperienciaLaboral::class, 'id_puesto');
    }

    public function oferta(): HasMany
    {
        return $this->hasMany(Oferta::class, 'id_puesto');
    }

    public function categoria(): BelongsTo
    {
        return $this->belongsTo(CategoriaPuesto::class, 'id_cat_puesto');
    }
}
