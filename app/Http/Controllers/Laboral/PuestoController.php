<?php

namespace App\Http\Controllers\Laboral;

use App\Models\Laboral\Puesto;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Laboral\PuestoRequest;

class PuestoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $puestos = Puesto::all()->toArray();
        return response()->json($puestos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PuestoRequest $request)
    {
        $puesto = Puesto::create($request->validated());
        return response()->json($puesto, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Puesto  $puesto
     * @return \Illuminate\Http\Response
     */
    public function show(Puesto $puesto)
    {
        return response()->json($puesto);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Puesto  $puesto
     * @return \Illuminate\Http\Response
     */
    public function update(PuestoRequest $request, Puesto $puesto)
    {
        $puesto->update($request->validated());
        return response()->json($puesto, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Puesto  $puesto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Puesto $puesto)
    {
        $puesto->delete();
        return response()->json(null, 204);
    }
}
