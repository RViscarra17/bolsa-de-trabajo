<?php

namespace App\Models\Cuestionario;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Respuesta extends Model
{
     protected $table = 'respuesta';
    protected $guarded = ['id'];
    public $timestamps = false;
}
