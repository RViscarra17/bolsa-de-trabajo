<?php

namespace App\Models\Usuario;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Permission\Models\Permission;

class Permiso extends Permission
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $hidden = ['guard_name', 'pivot'];

    protected $guard_name = 'web';
}
