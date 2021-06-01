<?php

namespace App\Http\Controllers\Habilidad;

use App\Models\Habilidad\TipoNivel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TipoNivelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tipoNiveles=TipoNivel::all()->toArray();
        return response()->json($tipoNiveles);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TipoNivel  $tipoNivel
     * @return \Illuminate\Http\Response
     */
    public function show(TipoNivel $tipoNivel)
    {
        //
        return response()->json($tipoNivel);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TipoNivel  $tipoNivel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipoNivel $tipoNivel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TipoNivel  $tipoNivel
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipoNivel $tipoNivel)
    {
        //
    }
}
