<?php

namespace App\Http\Controllers\Cuestionario;

use App\Models\Cuestionario\TipoPregunta;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Cuestionario\TipoPreguntaRequest;

class TipoPreguntaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipos = TipoPregunta::all()->toArray();
        return response()->json($tipos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TipoPreguntaRequest $request)
    {
        $tipo = TipoPregunta::create($request->validated());
        return response()->json($tipo, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TipoPregunta  $tipo
     * @return \Illuminate\Http\Response
     */
    public function show(TipoPregunta $tipo)
    {
        return response()->json($tipo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TipoPregunta  $tipo
     * @return \Illuminate\Http\Response
     */
    public function update(TipoPreguntaRequest $request, TipoPregunta $tipo)
    {
        $tipo->update($request->validated());
        return response()->json($tipo, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TipoPregunta  $tipo
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipoPregunta $tipo)
    {
        $tipo->delete();
        return response()->json(null, 204);
    }
}
