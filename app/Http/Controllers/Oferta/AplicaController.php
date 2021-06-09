<?php

namespace App\Http\Controllers\Oferta;

use App\Models\Oferta\Aplica;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Oferta\AplicacionRequest;
use App\Models\Oferta\Oferta;

class AplicaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ofertas =  Oferta::with('usuarios.perfiles')->toArray();
        return response()->json($ofertas);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AplicacionRequest $request)
    {
        Aplica::create($request->validated());
        $id_usuario = $request->input('id_usuario');

        $id_oferta = $request->input('id_oferta');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Aplica  $aplica
     * @return \Illuminate\Http\Response
     */
    public function show(Aplica $aplica)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Aplica  $aplica
     * @return \Illuminate\Http\Response
     */
    public function update(AplicacionRequest $request, Aplica $aplica)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aplica  $aplica
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aplica $aplica)
    {
        //
    }
}
