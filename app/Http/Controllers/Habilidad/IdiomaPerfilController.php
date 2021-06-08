<?php

namespace App\Http\Controllers\Habilidad;

use App\Models\Habilidad\Idioma;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Habilidad\IdiomaPerfilRequest;
use App\Models\Perfil\Perfil;

class IdiomaPerfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perfil = auth()->user();
        $idiomas = Idioma::all();

        /*         if (!$perfil->es_admin && $perfil->perfil()->exists()) {
            $idiomas = $idiomas->where('id_perfil', '=', $perfil->perfil->id);
        }
 */
        return response()->json($idiomas);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(IdiomaPerfilRequest $request)
    {
        $perfil = Perfil::find($request->get('id_perfil'));
        $id_idioma = $request->get('id_idioma');
        if ($perfil->idiomas->contains($id_idioma)) {
            $idioma = Idioma::find($id_idioma);
            return response()->json(array('message' => 'El usuario ya ha agregado ' . $idioma->nombre_idioma . ' a su perfil'), 409);
        }

        $perfil->idiomas()->attach($id_idioma);

        return response()->json($perfil->redes()->find($id_idioma), 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Idioma  $idioma
     * @return \Illuminate\Http\Response
     */
    public function show(Perfil $perfil)
    {
        return response()->json($perfil->idiomas);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(IdiomaPerfilRequest $request, Perfil $perfil)
    {
        $id_idioma = $request->get('id_idioma');

        $perfil->idiomas()->updateExistingPivot($id_idioma, [
            'nombre_perfil' => $request->get('nombre_perfil'),
            'enlace_idioma' => $request->get('enlace_idioma'),
        ]);

        return response()->json($perfil->idiomas()->find($id_idioma), 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Idioma  $idioma
     * @return \Illuminate\Http\Response
     */
    public function destroy(Perfil $perfil, Idioma $idioma)
    {
        $perfil->idiomaes()->detach($idioma);
        return response()->json(null, 204);
    }
}
