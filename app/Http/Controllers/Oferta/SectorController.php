<?php

namespace App\Http\Controllers\Oferta;

use App\Models\Oferta\Sector;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Oferta\SectorRequest;

class SectorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sectores = Sector::all()->toArray();
        return response()->json($sectores);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SectorRequest $request)
    {
        $sector = Sector::create($request->validated());
        return response()->json($sector, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sector  $sector
     * @return \Illuminate\Http\Response
     */
    public function show(Sector $sector)
    {
        return response()->json($sector);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sector  $sector
     * @return \Illuminate\Http\Response
     */
    public function update(SectorRequest $request, Sector $sector)
    {
        $sector->update($request->validated());
        return response()->json($sector, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sector  $sector
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sector $sector)
    {
        $sector->delete();
        return response()->json(null, 204);
    }
}
