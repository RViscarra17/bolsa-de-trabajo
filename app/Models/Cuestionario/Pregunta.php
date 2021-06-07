<?php

namespace App\Models\Cuestionario;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
     protected $table = 'opcion';
    protected $guarded = ['id'];
    public $timestamps = false;
}
