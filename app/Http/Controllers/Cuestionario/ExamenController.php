<?php

namespace App\Http\Controllers\Cuestionario;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cuestionario\Examen;
use App\Http\Requests\Cuestionario\ExamenRequest;

class ExamenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipos = Examen::all()->toArray();
        return response()->json($tipos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ExamenRequest $request)
    {
        $tipo = Examen::create($request->validated());
        return response()->json($tipo, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Examen  $tipo
     * @return \Illuminate\Http\Response
     */
    public function show(Examen $tipo)
    {
        return response()->json($tipo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Examen  $tipo
     * @return \Illuminate\Http\Response
     */
    public function update(ExamenRequest $request, Examen $tipo)
    {
        $tipo->update($request->validated());
        return response()->json($tipo, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Examen  $tipo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Examen $tipo)
    {
        $tipo->delete();
        return response()->json(null, 204);
    }
}

