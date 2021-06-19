<?php

namespace App\Http\Controllers\Habilidad;

use App\Models\Habilidad\Idioma;
use App\Http\Controllers\Controller;
use App\Http\Requests\Habilidad\IdiomaPerfilRequest;
use App\Http\Requests\Habilidad\IdiomaPerfilUpdateRequest;
use App\Http\Resources\DetalleIdiomaResource;
use App\Http\Resources\IdiomaPerfilResource;
use App\Models\Habilidad\DetalleIdiomaPerfil;
use App\Models\Perfil\Perfil;
use Illuminate\Support\Facades\DB;

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

        DB::transaction(function () use ($request, $perfil, $id_idioma) {
            $perfil->idiomas()->attach($id_idioma);
            if ($detalles = $request->input('detalle')) {
                $id_idioma_perfil = $perfil->idiomas()->find($id_idioma)->detalle->id;
                foreach ($detalles as $detalle) {
                    DetalleIdiomaPerfil::create([
                        'id_idioma_perfil' => $id_idioma_perfil,
                        'id_hab_idioma' => $detalle['habilidad'],
                        'id_nivel_idioma' => $detalle['nivel'],
                    ]);
                }
            }
        });


        return response()->json(new IdiomaPerfilResource($perfil->idiomas()->find($id_idioma)), 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Idioma  $idioma
     * @return \Illuminate\Http\Response
     */
    public function show(Perfil $perfil)
    {
        return response()->json(IdiomaPerfilResource::collection($perfil->idiomas), 422);
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
        $idioma_perfil = $perfil->idiomas()->find($id_idioma);
        if (!$idioma_perfil) {
            return response()->json(array('message' => 'El usuario aun no ha agregado el idioma a su perfil'), 409);
        }
        $idioma_perfil->detalle->detalles_idioma()->delete();
        if ($detalles = $request->input('detalle')) {
            DB::transaction(function () use ($request, $idioma_perfil, $detalles) {
                foreach ($detalles as $detalle) {
                    DetalleIdiomaPerfil::create([
                        'id_idioma_perfil' => $idioma_perfil->detalle->id,
                        'id_hab_idioma' => $detalle['habilidad'],
                        'id_nivel_idioma' => $detalle['nivel'],
                    ]);
                }
            });
        }
        return response()->json(new IdiomaPerfilResource($perfil->idiomas()->find($id_idioma)), 422);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Idioma  $idioma
     * @return \Illuminate\Http\Response
     */
    public function destroy(Perfil $perfil, Idioma $idioma)
    {
        $perfil->idiomas()->detach($idioma);
        return response()->json(null, 204);
    }
}
