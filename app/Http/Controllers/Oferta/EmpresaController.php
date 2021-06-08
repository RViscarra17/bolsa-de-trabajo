<?php

namespace App\Http\Controllers\Oferta;

use App\Http\Requests\Oferta\EmpresaRequest;
use App\Models\Oferta\Empresa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empresas = Empresa::all()->toArray();
        return response()->json($empresas);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmpresaRequest $request)
    {
        $empresa = Empresa::create($request->validated());
        return response()->json($empresa, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function show(Empresa $empresa)
    {
        return response()->json($empresa);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function update(EmpresaRequest $request, Empresa $empresa)
    {
        $empresa->update($request->validated());
        return response()->json($empresa, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empresa $empresa)
    {
        $empresa->delete();
        return response()->json(null, 204);
    }
}
