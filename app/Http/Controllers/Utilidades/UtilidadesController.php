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

    public function roles()
    {
        $roles = auth()->user()->getRoleNames();
        return response()->json($roles);
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

    public function buscar_aspirante()
    {
        //TODO
    }

    public function buscar_ofertas()
    {
        //TODO
    }
}
