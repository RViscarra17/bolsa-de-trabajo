<?php

namespace App\Http\Controllers\Oferta;

use App\Models\Oferta\CategoriaPuesto;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Oferta\CategoriaPuestoRequest;

class CategoriaPuestoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = CategoriaPuesto::all()->toArray();
        return response()->json($categorias);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoriaPuestoRequest $request)
    {
        $categoria = CategoriaPuesto::create($request->validated());
        return response()->json($categoria, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CategoriaPuesto  $categoria
     * @return \Illuminate\Http\Response
     */
    public function show(CategoriaPuesto $categoria)
    {
        return response()->json($categoria);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CategoriaPuesto  $categoria
     * @return \Illuminate\Http\Response
     */
    public function update(CategoriaPuestoRequest $request, CategoriaPuesto $categoria)
    {
        $categoria->update($request->validated());
        return response()->json($categoria, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CategoriaPuesto  $categoria
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoriaPuesto $categoria)
    {
        $categoria->delete();
        return response()->json(null, 204);
    }
}
