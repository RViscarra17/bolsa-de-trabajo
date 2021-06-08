<?php

namespace App\Http\Controllers\Educacion;

use App\Models\Educacion\InstitucionCertificadora;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Educacion\InstitucionCertificadoraRequest;

class InstitucionCertificadoraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $institucionesCertificadoras = InstitucionCertificadora::all()->toArray();
        return response()->json($institucionesCertificadoras);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InstitucionCertificadoraRequest $request)
    {
        //
        $institucionCertificadora = InstitucionCertificadora::create($request->validated());
        return response()->json($institucionCertificadora, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InstitucionCertificadora  $institucionCertificadora
     * @return \Illuminate\Http\Response
     */
    public function show(InstitucionCertificadora $institucionCertificadora)
    {
        //
        return response()->json($institucionCertificadora);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\InstitucionCertificadora  $institucionCertificadora
     * @return \Illuminate\Http\Response
     */
    public function update(InstitucionCertificadoraRequest $request, InstitucionCertificadora $institucionCertificadora)
    {
        //
        $institucionCertificadora->update($request->validated());
        return response()->json($institucionCertificadora, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InstitucionCertificadora  $institucionCertificadora
     * @return \Illuminate\Http\Response
     */
    public function destroy(InstitucionCertificadora $institucionCertificadora)
    {
        //
        $institucionCertificadora->delete();
        return response()->json(null, 200);
    }
}
