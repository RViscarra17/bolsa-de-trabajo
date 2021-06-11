<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Usuario\UsuarioRequest;
use App\Models\Usuario\Rol;
use App\Models\Usuario\Usuario;
use App\Services\RolUsuarioService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function register(UsuarioRequest $request)
    {
        DB::transaction(function () use ($request) {
            $usuario = Usuario::create($request->except('roles'));
            $usuario->syncRoles($request->input('id_tipo_usuario'));
        });

        return response()->json(null, 201);
    }

    public function login(Request $request)
    {
        $request->validate([
            'correo' => 'required|email',
            'password' => 'required'
        ]);

        $credenciales = request(['correo', 'password']);
        if (!auth()->attempt($credenciales)) {
            return response()->json([
                'message' => 'Datos incorrectos, intente nuevamente.',
                'errors' => [
                    'password' => [
                        'La contraseña o correo no son correctos'
                    ],
                ]
            ], 422);
        }

        $user = Usuario::where('correo', $request->correo)->first();
        $authToken = $user->createToken('auth-token')->plainTextToken;

        return response()->json(['access_token' => $authToken,]);
    }

    public function logout()
    {
        auth()->user()->currentAccessToken()->delete();
        return response()->json(null, 200);
    }
}
