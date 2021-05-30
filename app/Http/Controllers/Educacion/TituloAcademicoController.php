<?php

namespace App\Http\Controllers\Educacion;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Educacion\TituloAcademicoRequest;
use App\Models\Educacion\TituloAcademico;

class TituloAcademicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $titulosAcademicos = TituloAcademico::with('categoria')->get()->toArray();
        return response()->json($titulosAcademicos);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TituloAcademicoRequest $request)
    {
        //
        $tituloAcademico=TituloAcademico::create($request->validated());
        return response()->json($tituloAcademico->load('categoria'),201);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TituloAcademico  $tituloAcademico
     * @return \Illuminate\Http\Response
     */
    public function show(TituloAcademico $tituloAcademico)
    {
        //
        return response()->json($tituloAcademico);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TituloAcademico  $tituloAcademico
     * @return \Illuminate\Http\Response
     */
    public function update(TituloAcademicoRequest $request, TituloAcademico $tituloAcademico)
    {
        //
        $tituloAcademico->update($request->validated());
        return response()->json($tituloAcademico->load('categoria'),200);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TituloAcademico  $tituloAcademico
     * @return \Illuminate\Http\Response
     */
    public function destroy(TituloAcademico $tituloAcademico)
    {
        //
        $tituloAcademico->delete();
        return response()->json(null,204);
    }
}
