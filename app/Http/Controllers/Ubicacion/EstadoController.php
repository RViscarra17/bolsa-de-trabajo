<?php

namespace App\Http\Controllers\Ubicacion;

use App\Models\Ubicacion\Estado;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Ubicacion\EstadoRequest;

class EstadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estados = Estado::all()->toArray();
        return response()->json($estados);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EstadoRequest $request)
    {
        $estado = Estado::create($request->validated());
        return response()->json($estado, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Estado  $estado
     * @return \Illuminate\Http\Response
     */
    public function show(Estado $estado)
    {
        return response()->json($estado);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Estado  $estado
     * @return \Illuminate\Http\Response
     */
    public function update(EstadoRequest $request, Estado $estado)
    {
        $estado->update($request->validated());
        return response()->json($estado, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Estado  $estado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estado $estado)
    {
        $estado->delete();
        return response()->json(null, 204);
    }
}
