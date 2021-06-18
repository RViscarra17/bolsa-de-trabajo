<?php

namespace App\Http\Controllers\Ubicacion;

use App\Models\Ubicacion\Direccion;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Ubicacion\DireccionRequest;
use Illuminate\Support\Facades\Auth;

class DireccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!Auth::user()->es_admin) {
            $direcciones = Direccion::where('id_usuario', '=', Auth::user()->id)->get();
        } else {
            $direcciones = Direccion::all();
        }

        if ($direcciones->empty()) {
            return response()->json(array(
                'message' => 'No hay direcciones registradas'
            ), 422);
        }

        return response()->json($direcciones->toArray());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DireccionRequest $request)
    {
        $direccion = Direccion::create($request->validated());
        return response()->json($direccion, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Direccion  $direccion
     * @return \Illuminate\Http\Response
     */
    public function show(Direccion $direccion)
    {
        return response()->json($direccion);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Direccion  $direccion
     * @return \Illuminate\Http\Response
     */
    public function update(DireccionRequest $request, Direccion $direccion)
    {
        $direccion->update($request->validated());
        return response()->json($direccion, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Direccion  $direccion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Direccion $direccion)
    {
        $direccion->delete();
        return response()->json(null, 204);
    }
}
