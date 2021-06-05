<?php

namespace App\Http\Controllers\Otro;


use App\Http\Controllers\Controller;
use App\Http\Requests\Otro\RecomendacionRequest;
use App\Models\Otro\Recomendacion;

class RecomendacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $recomendaciones = Recomendacion::all()->toArray();
        return response()->json($recomendaciones);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RecomendacionRequest $request)
    {
        //
        $recomendacion = Recomendacion::create($request->validated());
        return response()->json($recomendacion, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Recomendacion  $recomendacion
     * @return \Illuminate\Http\Response
     */
    public function show(Recomendacion $recomendacion)
    {
        //
        return response()->json($recomendacion);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Recomendacion  $recomendacion
     * @return \Illuminate\Http\Response
     */
    public function update(RecomendacionRequest $request, Recomendacion $recomendacion)
    {
        //
        $recomendacion->update($request->validated());
        return response()->json($recomendacion, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recomendacion  $recomendacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recomendacion $recomendacion)
    {
        //
        $recomendacion->delete();
        return response()->json(null, 204);
    }
}
