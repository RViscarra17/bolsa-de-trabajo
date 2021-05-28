<?php

namespace App\Http\Controllers\Educacion;

use App\Models\Perfil\NivelAcademico;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Perfil\NivelAcademicoRequest;

class NivelAcademicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $niveles = NivelAcademico::all()->toArray();
        return response()->json($niveles);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NivelAcademicoRequest $request)
    {
        $nivel = NivelAcademico::create($request->validated());
        return response()->json($nivel, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NivelAcademico  $nivel
     * @return \Illuminate\Http\Response
     */
    public function show(NivelAcademico $nivel)
    {
        return response()->json($nivel);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NivelAcademico  $nivel
     * @return \Illuminate\Http\Response
     */
    public function update(NivelAcademicoRequest $request, NivelAcademico $nivel)
    {
        $nivel->update($request->validated());
        return response()->json($nivel, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NivelAcademico  $nivel
     * @return \Illuminate\Http\Response
     */
    public function destroy(NivelAcademico $nivel)
    {
        $nivel->delete();
        return response()->json(null, 204);
    }
}
