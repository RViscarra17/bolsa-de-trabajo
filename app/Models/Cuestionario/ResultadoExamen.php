<?php

namespace App\Models\Cuestionario;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResultadoExamen extends Model
{
     protected $table = 'resultado_examen';
    protected $guarded = ['id'];
    public $timestamps = false;
}
