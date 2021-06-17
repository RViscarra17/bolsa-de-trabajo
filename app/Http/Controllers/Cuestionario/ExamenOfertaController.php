<?php

namespace App\Http\Controllers\Cuestionario;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cuestionario\ExamenOferta;
use App\Http\Requests\Cuestionario\ExamenOfertaRequest;

class ExamenOfertaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $examens = ExamenOferta::all()->toArray();
        return response()->json($examens);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ExamenOfertaRequest $request)
    {
        $examen = ExamenOferta::create($request->validated());
        return response()->json($examen, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ExamenOferta  $examen
     * @return \Illuminate\Http\Response
     */
    public function show(ExamenOferta $examen)
    {
        return response()->json($examen);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ExamenOferta  $examen
     * @return \Illuminate\Http\Response
     */
    public function update(ExamenOfertaRequest $request, ExamenOferta $examen)
    {
        $examen->update($request->validated());
        return response()->json($examen, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ExamenOferta  $examen
     * @return \Illuminate\Http\Response
     */
    public function destroy(ExamenOferta $examen)
    {
        $examen->delete();
        return response()->json(null, 204);
    }
}
