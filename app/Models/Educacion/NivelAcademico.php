<?php

namespace App\Models\Educacion;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class NivelAcademico extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = 'nivel_academico';

    public $timestamps = false;


    public function conocimientos(): HasMany
    {
        return $this->hasMany(Conocimiento::class, 'id_nivel_ac');
    }
}
