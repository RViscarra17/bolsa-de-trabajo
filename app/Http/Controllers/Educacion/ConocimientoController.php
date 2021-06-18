<?php

namespace App\Http\Controllers\Educacion;

use App\Models\Educacion\Conocimiento;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Educacion\ConocimientoRequest;
use Illuminate\Support\Facades\Auth;

class ConocimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!Auth::user()->es_admin) {
            $conocimientos = Conocimiento::with('tipo', 'nivel')
                ->where('id_perfil', '=', Auth::user()->perfil->id)
                ->get();
        } else {
            $conocimientos = Conocimiento::with('tipo', 'nivel')->get();
        }

        if ($conocimientos->empty()) {
            return response()->json(array(
                'message' => 'No hay conocimientos registrados'
            ), 422);
        }

        return response()->json($conocimientos->toArray());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ConocimientoRequest $request)
    {
        $conocimiento = Conocimiento::create($request->validated());
        return response()->json($conocimiento->load('tipo'), 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Conocimiento  $conocimiento
     * @return \Illuminate\Http\Response
     */
    public function show(Conocimiento $conocimiento)
    {
        return response()->json($conocimiento);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Conocimiento  $conocimiento
     * @return \Illuminate\Http\Response
     */
    public function update(ConocimientoRequest $request, Conocimiento $conocimiento)
    {
        $conocimiento->update($request->validated());
        return response()->jason($conocimiento->load('tipo'), 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Conocimiento  $conocimiento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Conocimiento $conocimiento)
    {
        $conocimiento->delete();
        return response()->json(null, 204);
    }
}
