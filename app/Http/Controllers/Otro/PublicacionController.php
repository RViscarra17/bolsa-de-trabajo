<?php

namespace App\Http\Controllers\Otro;

use App\Models\Otro\Publicacion;
use App\Http\Requests\Otro\PublicacionRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PublicacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!Auth::user()->es_admin) {
            $publicaciones = Publicacion::where('id_perfil', '=', Auth::user()->perfil->id)->get();
        } else {
            $publicaciones = Publicacion::all();
        }

        if (!$publicaciones) {
            return response()->json(array(
                'message' => 'No hay publicaciones registradas'
            ), 422);
        }

        return response()->json($publicaciones->toArray());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PublicacionRequest $request)
    {
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
