<?php

namespace App\Models\Habilidad;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Habilidad extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    protected $table = 'habilidad';


    public function categoria(): BelongsTo
    {
        return $this->belongsTo(CategoriaHabilidad::class, 'id_cat_habilidad');
    }
}
