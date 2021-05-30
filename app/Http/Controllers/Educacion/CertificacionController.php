<?php

namespace App\Http\Controllers\Educacion;

use App\Http\Controllers\Controller;
use App\Models\Educacion\Certificacion;
use Illuminate\Http\Request;
use App\Http\Requests\Educacion\CertificacionRequest;

class CertificacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $certificaciones = Certificacion::with('tipo')->get()->toArray();
        return response()->json($certificaciones);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CertificacionRequest $request)
    {
        //
        $certificacion=Certificacion::create($request->validated());
        return response()->json($certificacion->load('tipo'),201);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Certificacion  $certificacion
     * @return \Illuminate\Http\Response
     */
    public function show(Certificacion $certificacion)
    {
        //
        return response()->json($certificacion);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Certificacion  $certificacion
     * @return \Illuminate\Http\Response
     */
    public function update(CertificacionRequest $request, Certificacion $certificacion)
    {
        //
        $certificacion->update($request->validated());
        return response()->jason($certificacion->load('tipo'),200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Certificacion  $certificacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Certificacion $certificacion)
    {
        //
        $certificacion->delete();
        return response()->json(null, 204);
    }
}
