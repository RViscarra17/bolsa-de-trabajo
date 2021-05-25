<?php

namespace App\Models\Usuario;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class RedSocial extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = 'red_social';

    public $timestamps = false;


    public function usuarios(): BelongsToMany
    {
        return $this->belongsToMany(Usuario::class, 'red_usuario', 'id_red', 'id_usuario');
    }
}
