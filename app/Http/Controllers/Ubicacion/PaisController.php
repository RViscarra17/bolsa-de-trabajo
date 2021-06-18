<?php

namespace App\Http\Controllers\Ubicacion;

use App\Models\Ubicacion\Pais;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Ubicacion\PaisRequest;

class PaisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paises = Pais::all()->toArray();
        return response()->json($paises);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PaisRequest $request)
    {
        $pais = Pais::create($request->validated());
        return response()->json($pais, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pais  $pais
     * @return \Illuminate\Http\Response
     */
    public function show(Pais $pais)
    {
        return response()->json($pais->load('estados'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pais  $pais
     * @return \Illuminate\Http\Response
     */
    public function update(PaisRequest $request, Pais $pais)
    {
        $pais->update($request->validated());
        return response()->json($pais, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pais  $pais
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pais $pais)
    {
        $pais->delete();
        return response()->json(null, 204);
    }
}
