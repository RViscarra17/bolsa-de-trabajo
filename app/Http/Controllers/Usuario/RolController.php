<?php

namespace App\Http\Controllers\Usuario;

use App\Models\Usuario\Rol;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Usuario\RolRequest;

class RolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Rol::all()->toArray();
        return response()->json($roles);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RolRequest $request)
    {
        $rol = Rol::create($request->validated());
        return response()->json($rol, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Usuario\Rol  $rol
     * @return \Illuminate\Http\Response
     */
    public function show(Rol $rol)
    {
        return response()->json($rol);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Usuario\Rol  $rol
     * @return \Illuminate\Http\Response
     */
    public function update(RolRequest $request, Rol $rol)
    {
        $rol->update($request->validated());
        return response()->json($rol, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usuario\Rol  $rol
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rol $rol)
    {
        $rol->delete();
        return response()->json(null, 204);
    }
}
