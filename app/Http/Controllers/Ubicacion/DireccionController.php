<?php

namespace App\Http\Controllers\Ubicacion;

use App\Models\Ubicacion\Direccion;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\DireccionRequest;

class DireccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $direcciones = auth()->user()->direcciones;
        return response()->json($direcciones);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DireccionRequest $request)
    {
        $direccion = Direccion::create($request->validated());
        return response()->json($direccion, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Direccion  $direccion
     * @return \Illuminate\Http\Response
     */
    public function show(Direccion $direccion)
    {
        return response()->json($direccion);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Direccion  $direccion
     * @return \Illuminate\Http\Response
     */
    public function update(DireccionRequest $request, Direccion $direccion)
    {
        $direccion->update($request->validated());
        return response()->json($direccion, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Direccion  $direccion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Direccion $direccion)
    {
        $direccion->delete();
        return response()->json(null, 204);
    }
}
