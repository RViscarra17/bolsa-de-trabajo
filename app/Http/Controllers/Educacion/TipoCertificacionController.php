<?php

namespace App\Http\Controllers\Educacion;

use App\Models\Perfil\TipoCertificacion;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Perfil\TipoCertificacionRequest;

class TipoCertificacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipos = TipoCertificacion::all()->toArray();
        return response()->json($tipos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TipoCertificacionRequest $request)
    {
        $tipo = TipoCertificacion::create($request->validated());
        return response()->json($tipo, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TipoCertificacion  $tipo
     * @return \Illuminate\Http\Response
     */
    public function show(TipoCertificacion $tipo)
    {
        return response()->json($tipo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TipoCertificacion  $tipo
     * @return \Illuminate\Http\Response
     */
    public function update(TipoCertificacionRequest $request, TipoCertificacion $tipo)
    {
        $tipo->update($request->validated());
        return response()->json($tipo, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TipoCertificacion  $tipo
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipoCertificacion $tipo)
    {
        $tipo->delete();
        return response()->json(null, 204);
    }
}
