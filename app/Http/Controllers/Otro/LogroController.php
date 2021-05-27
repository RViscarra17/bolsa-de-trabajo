<?php

namespace App\Http\Controllers\Otro;

use App\Models\Otro\Logro;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Otro\LogroRequest;

class LogroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $logros = Logro::with('tipo')->get()->toArray();
        return response()->json($logros);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LogroRequest $request)
    {
        //
        $logro = Logro::create($request->validated());
        return response()->json($logro->load('tipo'), 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Logro  $logro
     * @return \Illuminate\Http\Response
     */
    public function show(Logro $logro)
    {
        //
        return response()->json($logro);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Logro  $logro
     * @return \Illuminate\Http\Response
     */
    public function update(LogroRequest $request, Logro $logro)
    {
        //
        $logro->update($request->validated());
        return response()->jason($logro->load('tipo'),200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Logro  $logro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Logro $logro)
    {
        //
        $logro->delete();
        return response()->json(null, 204);
    }
}
