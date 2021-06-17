<?php

namespace App\Models\Oferta;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RangoSalario extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = 'rango_salario';

    public $timestamps = false;


    protected $casts = [
        'minimo' => 'decimal:2',
        'maximo' => 'decimal:2',
    ];

    public function oferta(): BelongsTo
    {
        return $this->belongsTo(Oferta::class, 'id_oferta');
    }
}
