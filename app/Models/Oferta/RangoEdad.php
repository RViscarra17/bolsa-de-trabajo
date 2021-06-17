<?php

namespace App\Models\Oferta;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RangoEdad extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = 'rango_edad';

    public $timestamps = false;


    public function oferta(): BelongsTo
    {
        return $this->belongsTo(Oferta::class, 'id_oferta');
    }
}
