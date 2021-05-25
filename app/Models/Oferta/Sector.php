<?php

namespace App\Models\Oferta;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = 'sector';

    public $timestamps = false;


    public function empresas(): HasMany
    {
        return $this->hasMany(Empresa::class, 'id_sector');
    }
}
