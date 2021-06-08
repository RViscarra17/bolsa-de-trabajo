<?php

namespace App\Http\Controllers\Habilidad;

use App\Models\Habilidad\Idioma;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Habilidad\IdiomaRequest;

class IdiomaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $idiomas = Idioma::all()->toArray();
        return response()->json($idiomas);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(IdiomaRequest $request)
    {
        $idioma = Idioma::create($request->validated());
        return response()->json($idioma, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Idioma  $idioma
     * @return \Illuminate\Http\Response
     */
    public function show(Idioma $idioma)
    {
        return response()->json($idioma);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Idioma  $idioma
     * @return \Illuminate\Http\Response
     */
    public function update(IdiomaRequest $request, Idioma $idioma)
    {
        $idioma->update($request->validated());
        return response()->json($idioma, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Idioma  $idioma
     * @return \Illuminate\Http\Response
     */
    public function destroy(Idioma $idioma)
    {
        $idioma->delete();
        return response()->json(null, 204);
    }
}
