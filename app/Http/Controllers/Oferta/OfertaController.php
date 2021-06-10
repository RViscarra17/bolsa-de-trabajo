<?php

namespace App\Http\Controllers\Oferta;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Oferta\OfertaRequest;
use App\Models\Oferta\Oferta;

class OfertaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ofertas = Oferta::all()->toArray();
        return response()->json($ofertas);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OfertaRequest $request)
    {
        $oferta = Oferta::create(
            $request->except(
                'habilidades',
                'hab_exp',
                'titulos',
                'titulos_exp'
            )
        );

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

        return response()->json($oferta->load('habilidades', 'titulos', 'puesto'), 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Oferta  $oferta
     * @return \Illuminate\Http\Response
     */
    public function show(Oferta $oferta)
    {
        return response()->json($oferta->load('habilidades', 'titulos', 'puesto'));
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
        $oferta->update(
            $request->except(
                'habilidades',
                'hab_exp',
                'titulos',
                'titulos_exp'
            )
        );

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

        return response()->json($oferta->load('habilidades', 'titulos', 'puesto'), 200);
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
