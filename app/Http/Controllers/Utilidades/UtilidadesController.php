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
        $data = array();
        $data =  [
            'id' => $usuario->id,
            'nombre' => $usuario->nombres . ' ' . $usuario->apellidos,
            'tipo' => $usuario->tipo->nombre_tipo_usuario ?? 'Ninguno',
        ];

        if (!$usuario->es_admin) {
            if ($id_empresa = $usuario->empresa->id ?? null) {
                $data['id_empresa'] = $id_empresa;
            } elseif ($id_perfil = $usuario->perfil->id ?? null) {
                $data['id_perfil'] = $id_perfil;
            }
        }

        return response()->json([
            'data' => $data,
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
