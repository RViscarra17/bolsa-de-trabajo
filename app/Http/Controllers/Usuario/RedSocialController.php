<?php

namespace App\Http\Controllers\Usuario;

use App\Models\Usuario\RedSocial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Usuario\RedSocialRequest;

class RedSocialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $redes = RedSocial::all()->toArray();
        return response()->json($redes);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RedSocialRequest $request)
    {
        $red = RedSocial::create($request->validated());
        return response()->json($red, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Usario\RedSocial  $red
     * @return \Illuminate\Http\Response
     */
    public function show(RedSocial $red)
    {
        return response()->json($red);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Usario\RedSocial  $red
     * @return \Illuminate\Http\Response
     */
    public function update(RedSocialRequest $request, RedSocial $red)
    {
        $red->update($request->validated());
        return response()->json($red, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usario\RedSocial  $red
     * @return \Illuminate\Http\Response
     */
    public function destroy(RedSocial $red)
    {
        $red->delete();
        return response()->json(null, 204);
    }
}
