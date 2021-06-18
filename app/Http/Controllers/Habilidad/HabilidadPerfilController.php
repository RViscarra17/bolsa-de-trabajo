<?php

namespace App\Http\Controllers\Habilidad;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Habilidad\Habilidad;
use App\Models\Perfil\Perfil;
use Illuminate\Support\Facades\Auth;

class HabilidadPerfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!Auth::user()->es_admin) {
            $habilidades = Auth::user()->perfil->habilidades->load('categoria');
        } else {
            $habilidades = Habilidad::with('categoria')->get();
        }

        if ($habilidades->empty()) {
            return response()->json(array(
                'message' => 'No hay habilidades registradas'
            ), 422);
        }

        return response()->json($habilidades->toArray());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $perfil = Perfil::find($request->input('id_perfil'));
        $id_habilidad = $request->input('id_habilidad');

        if ($perfil->habilidades->contains($id_habilidad)) {
            $habilidad = Habilidad::find($id_habilidad);
            return response()->json(array('message' => 'El usuario ya ha agregado ' . $habilidad->nombre_habilidad . ' en su cuenta'), 409);
        }

        $perfil->habilidades()->attach($id_habilidad, [
            'experiencia' => $request->input('experiencia'),
        ]);

        return response()->json($perfil->habilidades()->find($id_habilidad)->load('categoria'), 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Perfil $perfil)
    {
        return response($perfil->habilidades->load('categoria'), 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Perfil $perfil)
    {
        $id_habilidad = $request->get('id_habilidad');

        $perfil->habilidades()->updateExistingPivot($id_habilidad, [
            'experiencia' => $request->input('experiencia'),
        ]);

        return response()->json($perfil->habilidades()->find($id_habilidad)->load('categoria'), 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Perfil $perfil, Habilidad $habilidad)
    {
        $perfil->habilidades()->detach($habilidad);
        return response()->json(null, 204);
    }
}
