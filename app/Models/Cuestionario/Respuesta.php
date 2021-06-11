<?php

namespace App\Models\Cuestionario;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Respuesta extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = 'opcion';

    public $timestamps = false;


    public function opcion(): BelongsTo
    {
        return $this->belongsTo(Opcion::class, 'id_opcion');
    }

    public function resultado_examen(): BelongsTo
    {
        return $this->belongsTo(ResultadoExamen::class, 'id_resultado_examen');
    }
}
