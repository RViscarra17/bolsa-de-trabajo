<?php

namespace App\Http\Controllers\Habilidad;

use App\Models\Habilidad\NivelIdioma;
use Illuminate\Http\Request;
use App\Http\Requests\Habilidad\NivelIdiomaRequest;
use App\Http\Controllers\Controller;

class NivelIdiomaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $nivelIdiomas = NivelIdioma::with('categoria')->get->toArray();
        return response()->json($nivelIdiomas);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NivelIdiomaRequest $request)
    {
        //
        $nivelIdioma=NivelIdioma::create($request->validated());
        return response()->json($nivelIdioma->load('categoria'),201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NivelIdioma  $nivelIdioma
     * @return \Illuminate\Http\Response
     */
    public function show(NivelIdioma $nivelIdioma)
    {
        //
        return response()->json($nivelIdioma);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NivelIdioma  $nivelIdioma
     * @return \Illuminate\Http\Response
     */
    public function update(NivelIdiomaRequest $request, NivelIdioma $nivelIdioma)
    {
        //
        $nivelIdioma->update($request->validated());
        return response()->json($nivelIdioma->load('categoria'),200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NivelIdioma  $nivelIdioma
     * @return \Illuminate\Http\Response
     */
    public function destroy(NivelIdioma $nivelIdioma)
    {
        //
        $nivelIdioma->delete();
        return response()->json(null,204);
    }
}
