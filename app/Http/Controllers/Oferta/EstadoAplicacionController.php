<?php

namespace App\Http\Controllers\Oferta;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Oferta\EstadoAplicacion;

class EstadoAplicacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estados = EstadoAplicacion::all()->toArray();
        return response()->json($estados);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $estado = EstadoAplicacion::create($request->validated());
        return response()->json($estado, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EstadoAplicacion  $estado
     * @return \Illuminate\Http\Response
     */
    public function show(EstadoAplicacion $estado)
    {
        return response()->json($estado);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EstadoAplicacion  $estado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EstadoAplicacion $estado)
    {
        $estado->update($request->validated());
        return response()->json($estado, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EstadoAplicacion  $estado
     * @return \Illuminate\Http\Response
     */
    public function destroy(EstadoAplicacion $estado)
    {
        $estado->delete();
        return response()->json(null, 204);
    }
}
