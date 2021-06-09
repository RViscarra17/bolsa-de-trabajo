<?php

namespace App\Models\Cuestionario;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Examen extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = 'examen';

    public $timestamps = false;


    public function examenes(): HasMany
    {
        return $this->hasMany(Examen::class, 'id_examen');
    }
}
