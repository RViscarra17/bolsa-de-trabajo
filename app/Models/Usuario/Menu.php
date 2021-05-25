<?php

namespace App\Models\Usuario;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Menu extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = 'menu';

    public $timestamps = false;


    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(Rol::class, 'accede_a', 'id_menu', 'id_rol');
    }

    public function menus(): HasMany
    {
        return $this->hasMany(Menu::class, 'id_menu_padre');
    }

    public function sub_menus()
    {
        return $this->hasMany(Menu::class, 'id_menu_padre')->with('sub_menus');
    }
}
