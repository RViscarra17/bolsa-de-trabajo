<?php

namespace App\Http\Controllers\Usuario;

use App\Http\Controllers\Controller;
use App\Http\Requests\Usuario\RedUsuarioRequest;
use App\Models\Usuario\RedSocial;
use App\Models\Usuario\Usuario;

class RedUsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = Usuario::with('redes')->get();
        return response()->json($usuarios);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RedUsuarioRequest $request)
    {
        $usuario = Usuario::find($request->get('id_usuario'));
        $id_red = $request->get('id_red');
        if ($usuario->redes->contains($id_red)) {
            $red = RedSocial::find($id_red);
            return response()->json(array('message' => 'El usuario ya ha agregado ' . $red->nombre_red . ' a su cuenta'), 409);
        }

        $usuario->redes()->attach($id_red, [
            'nombre_usuario' => $request->get('nombre_usuario'),
            'enlace_red' => $request->get('enlace_red'),
        ]);

        return response()->json($usuario->redes()->find($id_red), 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Usuario $usuario)
    {
        return response($usuario->redes, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RedUsuarioRequest $request, Usuario $usuario)
    {
        $id_red = $request->get('id_red');

        $usuario->redes()->updateExistingPivot($id_red, [
            'nombre_usuario' => $request->get('nombre_usuario'),
            'enlace_red' => $request->get('enlace_red'),
        ]);

        return response()->json($usuario->redes()->find($id_red), 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usuario $usuario, RedSocial $red)
    {
        $usuario->redes()->detach($red);
        return response()->json(null, 204);
    }
}
