<?php

namespace App\Http\Controllers\Habilidad;

use App\Models\Habilidad\Habilidad;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Habilidad\HabilidadRequest;


class HabilidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $habilidades = Habilidad::with('categoria')->get()->toArray();
        return response()->json($habilidades);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HabilidadRequest $request)
    {
        //
        $habilidad=Habilidad::create($request->validated());
        return response()->json($habilidad->load('categoria'),201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Habilidad  $habilidad
     * @return \Illuminate\Http\Response
     */
    public function show(Habilidad $habilidad)
    {
        //
        return response()->json($habilidad);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Habilidad  $habilidad
     * @return \Illuminate\Http\Response
     */
    public function update(HabilidadRequest $request, Habilidad $habilidad)
    {
        //
        $habilidad->update($request->validated());
        return response()->json($habilidad->load('categoria'),200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Habilidad  $habilidad
     * @return \Illuminate\Http\Response
     */
    public function destroy(Habilidad $habilidad)
    {
        //
        $habilidad->delete();
        return response()->json(null,204);
    }
}
