<?php

namespace App\Http\Controllers\Usuario;

use App\Models\Usuario\TipoTelefono;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Usuario\TipoTelefonoRequest;

class TipoTelefonoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipos = TipoTelefono::all()->toArray();
        return response()->json($tipos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TipoTelefonoRequest $request)
    {
        $tipo = TipoTelefono::create($request->validated());
        return response()->json($tipo, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TipoTelefono  $tipo
     * @return \Illuminate\Http\Response
     */
    public function show(TipoTelefono $tipo)
    {
        return response()->json($tipo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TipoTelefono  $tipo
     * @return \Illuminate\Http\Response
     */
    public function update(TipoTelefonoRequest $request, TipoTelefono $tipo)
    {
        $tipo->update($request->validated());
        return response()->json($tipo, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TipoTelefono  $tipo
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipoTelefono $tipo)
    {
        $tipo->delete();
        return response()->json(null, 204);
    }
}
