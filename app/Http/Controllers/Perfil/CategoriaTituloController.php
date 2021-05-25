<?php

namespace App\Http\Controllers\Perfil;

use App\Models\Perfil\CategoriaTitulo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Perfil\CategoriaTituloRequest;

class CategoriaTituloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = CategoriaTitulo::all()->toArray();
        return response()->json($categorias);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoriaTituloRequest $request)
    {
        $categoria = CategoriaTitulo::create($request->validated());
        return response()->json($categoria, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CategoriaTitulo  $categoria
     * @return \Illuminate\Http\Response
     */
    public function show(CategoriaTitulo $categoria)
    {
        return response()->json($categoria);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CategoriaTitulo  $categoria
     * @return \Illuminate\Http\Response
     */
    public function update(CategoriaTituloRequest $request, CategoriaTitulo $categoria)
    {
        $categoria->update($request->validated());
        return response()->json($categoria, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CategoriaTitulo  $categoria
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoriaTitulo $categoria)
    {
        $categoria->delete();
        return response()->json(null, 204);
    }
}
