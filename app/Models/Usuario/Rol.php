<?php

namespace App\Models\Usuario;;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Spatie\Permission\Models\Role;

class Rol extends Role
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $hidden = ['guard_name', 'pivot'];

    protected $guard_name = 'web';


    public function menus(): BelongsToMany
    {
        return $this->belongsToMany(Menu::class, 'accede_a', 'id_rol', 'id_menu');
    }
}
