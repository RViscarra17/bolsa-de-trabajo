<?php

namespace App\Http\Controllers\Perfil;

use App\Models\Perfil\Perfil;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Perfil\PerfilRequest;

class PerfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perfiles = Perfil::all()->toArray();
        return response()->json($perfiles);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PerfilRequest $request)
    {
        $perfil = Perfil::create($request->except(
            'habilidades',
            'hab_exp'
        ));
        if ($request->input('habilidades')) {
            $exp = $request->input('hab_exp');
            foreach ($request->input('habilidades') as $pos => $id) {
                $perfil->habilidades()->attach($id, [
                    'experiencia' => $exp[$pos],
                ]);
            }
        }
        return response()->json($perfil->load('habilidades'), 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Perfil  $perfil
     * @return \Illuminate\Http\Response
     */
    public function show(Perfil $perfil)
    {
        return response()->json($perfil->load('habilidades'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Perfil  $perfil
     * @return \Illuminate\Http\Response
     */
    public function update(PerfilRequest $request, Perfil $perfil)
    {
        $perfil->update($request->except(
            'habilidades',
            'hab_exp'
        ));

        $perfil->habilidades()->detach();

        if ($request->input('habilidades')) {
            $exp = $request->input('hab_exp');
            foreach ($request->input('habilidades') as $i => $id) {
                $perfil->habilidades()->attach($id, [
                    'experiencia' => $exp[$i],
                ]);
            }
        }
        return response()->json($perfil->load('habilidades'), 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Perfil  $perfil
     * @return \Illuminate\Http\Response
     */
    public function destroy(Perfil $perfil)
    {
        $perfil->delete();
        return response()->json(null, 204);
    }
}
