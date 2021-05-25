<?php

namespace App\Http\Controllers\Usuario;

use App\Models\Usuario\TipoUsuario;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Usuario\TipoUsuarioRequest;

class TipoUsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipos = TipoUsuario::all()->toArray();
        return response()->json($tipos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TipoUsuarioRequest $request)
    {
        $tipo = TipoUsuario::create($request->validated());
        return response()->json($tipo, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TipoUsuario  $tipo
     * @return \Illuminate\Http\Response
     */
    public function show(TipoUsuario $tipo)
    {
        return response()->json($tipo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TipoUsuario  $tipo
     * @return \Illuminate\Http\Response
     */
    public function update(TipoUsuarioRequest $request, TipoUsuario $tipo)
    {
        $tipo->update($request->validated());
        return response()->json($tipo, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TipoUsuario  $tipo
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipoUsuario $tipo)
    {
        $tipo->delete();
        return response()->json(null, 204);
    }
}
