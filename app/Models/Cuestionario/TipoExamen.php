<?php

namespace App\Models\Cuestionario;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class TipoExamen extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = 'tipo_examen';

    public $timestamps = false;


    public function examenes(): HasMany
    {
        return $this->hasMany(Examen::class, 'id_tipo_examen');
    }
}
