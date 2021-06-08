<?php

namespace App\Http\Controllers\Ubicacion;

use App\Models\Ubicacion\Ciudad;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Ubicacion\CiudadRequest;

class CiudadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ciudads = Ciudad::all()->toArray();
        return response()->json($ciudads);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CiudadRequest $request)
    {
        $ciudad = Ciudad::create($request->validated());
        return response()->json($ciudad, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ciudad  $ciudad
     * @return \Illuminate\Http\Response
     */
    public function show(Ciudad $ciudad)
    {
        return response()->json($ciudad);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ciudad  $ciudad
     * @return \Illuminate\Http\Response
     */
    public function update(CiudadRequest $request, Ciudad $ciudad)
    {
        $ciudad->update($request->validated());
        return response()->json($ciudad, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ciudad  $ciudad
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ciudad $ciudad)
    {
        $ciudad->delete();
        return response()->json(null, 204);
    }
}
