<?php

namespace App\Http\Controllers\Cuestionario;

use App\Models\Cuestionario\TipoExamen;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Cuestionario\TipoExamenRequest;

class TipoExamenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipos = TipoExamen::all()->toArray();
        return response()->json($tipos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TipoExamenRequest $request)
    {
        $tipo = TipoExamen::create($request->validated());
        return response()->json($tipo, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TipoExamen  $tipo
     * @return \Illuminate\Http\Response
     */
    public function show(TipoExamen $tipo)
    {
        return response()->json($tipo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TipoExamen  $tipo
     * @return \Illuminate\Http\Response
     */
    public function update(TipoExamenRequest $request, TipoExamen $tipo)
    {
        $tipo->update($request->validated());
        return response()->json($tipo, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TipoExamen  $tipo
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipoExamen $tipo)
    {
        $tipo->delete();
        return response()->json(null, 204);
    }
}
