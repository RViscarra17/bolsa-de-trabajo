<?php

namespace App\Models\Usuario;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class Usuario extends Authenticatable
{
    use HasApiTokens, HasRoles, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombres',
        'apellidos',
        'correo',
        'password',
        'id_tipo_usuario'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $table = 'usuario';

    public function tipo(): BelongsTo
    {
        return $this->belongsTo(TipoUsuario::class, 'id_tipo_usuario');
    }

    public function telefonos(): HasMany
    {
        return $this->hasMany(Telefono::class, 'id_usuario');
    }

    public function redes(): BelongsToMany
    {
        return $this->belongsToMany(RedSocial::class, 'red_usuario', 'id_usuario', 'id_red')
            ->withPivot('nombre_usuario', 'enlace_red')
            ->as('detalle');
    }
}
