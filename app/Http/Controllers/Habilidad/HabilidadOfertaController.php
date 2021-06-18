<?php

namespace App\Http\Controllers\Habilidad;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Habilidad\Habilidad;
use App\Models\Oferta\Oferta;
use Illuminate\Support\Facades\Auth;

class HabilidadOfertaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(array('message' => 'Las habilidades de una oferta se envian junto a sus datos'), 422);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $oferta = Oferta::find($request->input('id_oferta'));
        $id_habilidad = $request->input('id_habilidad');

        if ($oferta->habilidades->contains($id_habilidad)) {
            $habilidad = Habilidad::find($id_habilidad);
            return response()->json(array('message' => 'El usuario ya ha agregado ' . $habilidad->nombre_habilidad . ' en su cuenta'), 409);
        }

        $oferta->habilidades()->attach($id_habilidad, [
            'experiencia' => $request->input('experiencia'),
        ]);

        return response()->json($oferta->habilidades()->find($id_habilidad)->load('categoria'), 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(oferta $oferta)
    {
        return response($oferta->habilidades->load('categoria'), 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, oferta $oferta)
    {
        $id_habilidad = $request->get('id_habilidad');

        $oferta->habilidades()->updateExistingPivot($id_habilidad, [
            'experiencia' => $request->input('experiencia'),
        ]);

        return response()->json($oferta->habilidades()->find($id_habilidad)->load('categoria'), 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(oferta $oferta, Habilidad $habilidad)
    {
        $oferta->habilidades()->detach($habilidad);
        return response()->json(null, 204);
    }
}
