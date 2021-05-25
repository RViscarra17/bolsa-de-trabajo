<?php

namespace App\Http\Controllers\Usuario;

use App\Models\Usuario\Permiso;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Usuario\PermisoRequest;

class PermisoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permisos = Permiso::all()->toArray();
        return response()->json($permisos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PermisoRequest $request)
    {
        $permiso = Permiso::create($request->validated());
        return response()->json($permiso, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Usuario\Permiso  $permiso
     * @return \Illuminate\Http\Response
     */
    public function show(Permiso $permiso)
    {
        return response()->json($permiso);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Usuario\Permiso  $permiso
     * @return \Illuminate\Http\Response
     */
    public function update(PermisoRequest $request, Permiso $permiso)
    {
        $permiso->update($request->validated());
        return response()->json($permiso, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usuario\Permiso  $permiso
     * @return \Illuminate\Http\Response
     */
    public function destroy(Permiso $permiso)
    {
        $permiso->delete();
        return response()->json(null, 204);
    }
}
