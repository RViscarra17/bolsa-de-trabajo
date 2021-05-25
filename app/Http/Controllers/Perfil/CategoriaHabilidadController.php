<?php

namespace App\Http\Controllers\Perfil;

use App\Models\Perfil\CategoriaHabilidad;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Perfil\CategoriaHabilidadRequest;

class CategoriaHabilidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = CategoriaHabilidad::all()->toArray();
        return response()->json($categorias);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoriaHabilidadRequest $request)
    {
        $categoria = CategoriaHabilidad::create($request->validated());
        return response()->json($categoria, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CategoriaHabilidad  $categoria
     * @return \Illuminate\Http\Response
     */
    public function show(CategoriaHabilidad $categoria)
    {
        return response()->json($categoria);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CategoriaHabilidad  $categoria
     * @return \Illuminate\Http\Response
     */
    public function update(CategoriaHabilidadRequest $request, CategoriaHabilidad $categoria)
    {
        $categoria->update($request->validated());
        return response()->json($categoria, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CategoriaHabilidad  $categoria
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoriaHabilidad $categoria)
    {
        $categoria->delete();
        return response()->json(null, 204);
    }
}
