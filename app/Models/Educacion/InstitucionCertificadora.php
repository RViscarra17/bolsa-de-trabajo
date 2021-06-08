<?php

namespace App\Models\Educacion;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class InstitucionCertificadora extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    protected $table = 'institucion_certificadora';

    public $timestamps = false;


    public function certificaciones(): HasMany
    {
        return $this->hasMany(Certificacion::class, 'id_institucion_cert');
    }
}
