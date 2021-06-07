<?php

namespace App\Http\Controllers\Cuestionario;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cuestionario\Opcion;
use App\Http\Requests\Cuestionario\OpcionRequest;

class OpcionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipos = Opcion::all()->toArray();
        return response()->json($tipos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OpcionRequest $request)
    {
        $tipo = Opcion::create($request->validated());
        return response()->json($tipo, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Opcion  $tipo
     * @return \Illuminate\Http\Response
     */
    public function show(Opcion $tipo)
    {
        return response()->json($tipo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Opcion  $tipo
     * @return \Illuminate\Http\Response
     */
    public function update(OpcionRequest $request, Opcion $tipo)
    {
        $tipo->update($request->validated());
        return response()->json($tipo, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Opcion  $tipo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Opcion $tipo)
    {
        $tipo->delete();
        return response()->json(null, 204);
    }
}

