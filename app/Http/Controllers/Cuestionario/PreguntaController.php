<?php

namespace App\Http\Controllers\Cuestionario;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cuestionario\Pregunta;
use App\Http\Requests\Cuestionario\PreguntaRequest;

class PreguntaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipos = Pregunta::all()->toArray();
        return response()->json($tipos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PreguntaRequest $request)
    {
        $tipo = Pregunta::create($request->validated());
        return response()->json($tipo, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pregunta  $tipo
     * @return \Illuminate\Http\Response
     */
    public function show(Pregunta $tipo)
    {
        return response()->json($tipo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pregunta  $tipo
     * @return \Illuminate\Http\Response
     */
    public function update(PreguntaRequest $request, Pregunta $tipo)
    {
        $tipo->update($request->validated());
        return response()->json($tipo, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pregunta  $tipo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pregunta $tipo)
    {
        $tipo->delete();
        return response()->json(null, 204);
    }
}

