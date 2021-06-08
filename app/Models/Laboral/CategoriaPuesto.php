<?php

namespace App\Models\Laboral;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class CategoriaPuesto extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = 'categoria_puesto';

    public $timestamps = false;


    public function puestos(): HasMany
    {
        return $this->hasMany(Puesto::class, 'id_puesto');
    }
}
