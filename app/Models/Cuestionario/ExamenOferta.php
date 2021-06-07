<?php

namespace App\Models\Cuestionario;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamenOferta extends Model
{
     protected $table = 'examen_oferta';
    protected $guarded = ['id'];
    public $timestamps = false;
}
