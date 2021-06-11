<?php

namespace App\Models\Cuestionario;

use App\Models\Oferta\Empresa;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Examen extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = 'examen';

    public $timestamps = false;


    public function examenes_oferta(): HasMany
    {
        return $this->hasMany(ExamenOferta::class, 'id_examen');
    }

    public function preguntas(): HasMany
    {
        return $this->hasMany(Pregunta::class, 'id_examen');
    }

    public function empresa(): BelongsTo
    {
        return $this->belongsTo(Empresa::class, 'id_empresa');
    }

    public function tipo(): BelongsTo
    {
        return $this->belongsTo(TipoExamen::class, 'id_tipo_examen');
    }
}
