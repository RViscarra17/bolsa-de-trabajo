<?php

namespace App\Http\Controllers\Cuestionario;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cuestionario\ExamenOferta;
use App\Http\Requests\Cuestionario\ExamenOfertaRequest;

class ExamenOfertaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipos = ExamenOferta::all()->toArray();
        return response()->json($tipos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ExamenOfertaRequest $request)
    {
        $tipo = ExamenOferta::create($request->validated());
        return response()->json($tipo, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ExamenOferta  $tipo
     * @return \Illuminate\Http\Response
     */
    public function show(ExamenOferta $tipo)
    {
        return response()->json($tipo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ExamenOferta  $tipo
     * @return \Illuminate\Http\Response
     */
    public function update(ExamenOfertaRequest $request, ExamenOferta $tipo)
    {
        $tipo->update($request->validated());
        return response()->json($tipo, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ExamenOferta  $tipo
     * @return \Illuminate\Http\Response
     */
    public function destroy(ExamenOferta $tipo)
    {
        $tipo->delete();
        return response()->json(null, 204);
    }
}

