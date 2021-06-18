<?php

namespace App\Http\Controllers\Oferta;

use App\Http\Controllers\Controller;
use App\Http\Requests\Oferta\OfertaRequest;
use App\Http\Resources\OfertaResource;
use App\Models\Oferta\Oferta;
use App\Models\Oferta\RangoEdad;
use App\Models\Oferta\RangoSalario;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OfertaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!Auth::user()->es_admin) {
            $ofertas = Oferta::where('id_empresa', '=', Auth::user()->empresa->id)->get();
        } else {
            $ofertas = Oferta::all();
        }

        if ($ofertas->empty()) {
            return response()->json(array(
                'message' => 'No hay ofertas registradas'
            ), 422);
        }

        return response()->json(OfertaResource::collection($ofertas));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OfertaRequest $request)
    {
        $oferta = DB::transaction(function () use ($request) {
            $oferta = Oferta::create(
                $request->except(
                    'habilidades',
                    'hab_exp',
                    'titulos',
                    'titulos_exp'
                )
            );

            if ($request->has('sal_minimo')) {
                RangoSalario::create([
                    'id_oferta' => $oferta->id,
                    'minimo' => $request->input('sal_minimo'),
                    'maximo' => $request->input('sal_maximo'),
                ]);
            }

            if ($request->has('edad_minima')) {
                RangoEdad::create([
                    'id_oferta' => $oferta->id,
                    'edad_minima' => $request->input('edad_minima'),
                    'edad_maxima' => $request->input('edad_maxima') ?? null,
                ]);
            }

            if ($request->input('habilidades')) {
                $exp = $request->input('hab_exp');
                foreach ($request->input('habilidades') as $i => $id) {
                    $oferta->habilidades()->attach($id, [
                        'experiencia' => $exp[$i],
                    ]);
                }
            }

            if ($request->input('titulos')) {
                $exp = $request->input('titulos_exp');
                foreach ($request->input('titulos') as $pos => $id) {
                    $oferta->titulos()->attach($id, [
                        'nivel_minimo' => $exp[$pos],
                    ]);
                }
            }

            return $oferta;
        });
        //$oferta->load('habilidades', 'titulos', 'puesto', 'salario', 'edad')
        return response()->json(new OfertaResource($oferta), 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Oferta  $oferta
     * @return \Illuminate\Http\Response
     */
    public function show(Oferta $oferta)
    {
        return response()->json($oferta->load('habilidades', 'titulos', 'puesto', 'salario', 'edad'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Oferta  $oferta
     * @return \Illuminate\Http\Response
     */
    public function update(OfertaRequest $request, Oferta $oferta)
    {
        DB::transaction(function () use ($request, $oferta) {
            $oferta->update(
                $request->except(
                    'habilidades',
                    'hab_exp',
                    'titulos',
                    'titulos_exp'
                )
            );

            if ($request->has('sal_minimo')) {
                RangoSalario::updateOrCreate(
                    ['id_oferta' => $oferta->id],
                    [
                        'minimo' => $request->input('sal_minimo'),
                        'maximo' => $request->input('sal_maximo') ?? null,
                    ]
                );
            }

            if ($request->has('edad_minima')) {
                RangoEdad::updateOrCreate(
                    ['id_oferta' => $oferta->id],
                    [
                        'edad_minima' => $request->input('edad_minima'),
                        'edad_maxima' => $request->input('edad_maxima') ?? null,
                    ]
                );
            }

            $oferta->habilidades()->detach();

            if ($request->input('habilidades')) {
                $exp = $request->input('hab_exp');
                foreach ($request->input('habilidades') as $pos => $id) {
                    $oferta->habilidades()->attach($id, [
                        'experiencia' => $exp[$pos],
                    ]);
                }
            }

            $oferta->titulos()->detach();

            if ($request->input('titulos')) {
                $exp = $request->input('titulos_exp');
                foreach ($request->input('titulos') as $pos => $id) {
                    $oferta->titulos()->attach($id, [
                        'nivel_minimo' => $exp[$pos],
                    ]);
                }
            }
        });

        return response()->json(new OfertaResource($oferta), 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Oferta  $oferta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Oferta $oferta)
    {
        $oferta->delete();
        return response()->json(null, 204);
    }
}
