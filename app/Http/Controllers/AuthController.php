<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Usuario\Usuario;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'nombres' => 'required|string|regex:/^[A-zÀ-ú\s]+$/',
            'apellidos' => 'required|string|regex:/^[A-zÀ-ú\s]+$/',
            'correo' => 'required|email|unique:usuario,correo',
            'password' => 'required|min:8|confirmed'
        ]);

        $usuario = Usuario::create([
            'nombres' => $request->nombres,
            'apellidos' => $request->apellidos,
            'correo' => $request->correo,
            'password' => bcrypt($request->password),
        ]);

        return response()->json($usuario);
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

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
    }
}
