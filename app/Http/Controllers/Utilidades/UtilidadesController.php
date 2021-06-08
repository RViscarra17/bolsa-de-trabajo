<?php

namespace App\Http\Controllers\Utilidades;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\PermisosUsuarioResource;

class UtilidadesController extends Controller
{
    public function permisos()
    {
        $permisos = auth()->user()->getAllPermissions();
        return PermisosUsuarioResource::collection($permisos);
    }

    public function usuario()
    {
        $usuario = auth()->user();

        return response()->json([
            'data' =>
            [
                'nombre' => $usuario->nombres . ' ' . $usuario->apellidos,
                'tipo' => $usuario->tipo->nombre_tipo_usuario,
            ]
        ], 200);
    }
}
