<?php

namespace App\Http\Controllers\Otro;

use App\Models\Otro\TipoLogro;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Otro\TipoLogroRequest;

class TipoLogroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipos = TipoLogro::all()->toArray();
        return response()->json($tipos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TipoLogroRequest $request)
    {
        $tipo = TipoLogro::create($request->validated());
        return response()->json($tipo, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TipoLogro  $tipo
     * @return \Illuminate\Http\Response
     */
    public function show(TipoLogro $tipo)
    {
        return response()->json($tipo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TipoLogro  $tipo
     * @return \Illuminate\Http\Response
     */
    public function update(TipoLogroRequest $request, TipoLogro $tipo)
    {
        $tipo->update($request->validated());
        return response()->json($tipo, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TipoLogro  $tipo
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipoLogro $tipo)
    {
        $tipo->delete();
        return response()->json(null, 204);
    }
}
