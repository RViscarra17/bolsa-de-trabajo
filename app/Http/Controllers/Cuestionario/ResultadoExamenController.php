<?php

namespace App\Http\Controllers\Cuestionario;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cuestionario\Resultado;
use App\Http\Requests\Cuestionario\ResultadoRequest;

class ResultadoExamenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipos = ResultadoExamen::all()->toArray();
        return response()->json($tipos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ResultadoExamenRequest $request)
    {
        $tipo = ResultadoExamen::create($request->validated());
        return response()->json($tipo, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ResultadoExamen  $tipo
     * @return \Illuminate\Http\Response
     */
    public function show(ResultadoExamen $tipo)
    {
        return response()->json($tipo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ResultadoExamen  $tipo
     * @return \Illuminate\Http\Response
     */
    public function update(ResultadoExamenRequest $request, ResultadoExamen $tipo)
    {
        $tipo->update($request->validated());
        return response()->json($tipo, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ResultadoExamen  $tipo
     * @return \Illuminate\Http\Response
     */
    public function destroy(ResultadoExamen $tipo)
    {
        $tipo->delete();
        return response()->json(null, 204);
    }
}

