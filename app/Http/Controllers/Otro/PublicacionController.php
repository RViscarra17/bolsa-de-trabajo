<?php

namespace App\Http\Controllers\Otro;

use App\Models\Otro\Publicacion;
use App\Http\Requests\Otro\PublicacionRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PublicacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $publicaciones = Publicacion::all()->toArray();
        return response()->json($publicaciones);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PublicacionRequest $request)
    {
        //
        $publicacion = Publicacion::create($request->validated());
        return response()->json($publicacion, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Publicacion  $publicacion
     * @return \Illuminate\Http\Response
     */
    public function show(Publicacion $publicacion)
    {
        //
        return response()->json($publicacion);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Publicacion  $publicacion
     * @return \Illuminate\Http\Response
     */
    public function update(PublicacionRequest $request, Publicacion $publicacion)
    {
        //
        $publicacion->update($request->validated());
        return response()->json($publicacion, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Publicacion  $publicacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Publicacion $publicacion)
    {
        //
        $publicacion->delete();
        return response()->json(null, 204);
    }
}
