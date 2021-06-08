<?php

namespace App\Http\Controllers\Laboral;

use App\Models\Laboral\ExperienciaLaboral;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Laboral\ExperienciaLaboralRequest;

class ExperienciaLaboralController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $experiencias = ExperienciaLaboral::all()->toArray();
        return response()->json($experiencias);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $experiencia = ExperienciaLaboral::create($request->validated());
        return response()->json($experiencia, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ExperienciaLaboral  $experiencia
     * @return \Illuminate\Http\Response
     */
    public function show(ExperienciaLaboral $experiencia)
    {
        return response()->json($experiencia);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ExperienciaLaboral  $experiencia
     * @return \Illuminate\Http\Response
     */
    public function update(ExperienciaLaboralRequest $request, ExperienciaLaboral $experiencia)
    {
        $experiencia->update($request->validated());
        return response()->json($experiencia, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ExperienciaLaboral  $experiencia
     * @return \Illuminate\Http\Response
     */
    public function destroy(ExperienciaLaboral $experiencia)
    {
        $experiencia->delete();
        return response()->json(null, 204);
    }
}
