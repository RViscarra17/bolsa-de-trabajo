<?php

namespace App\Http\Controllers\Otro;

use App\Models\Otro\Evento;
use App\Http\Requests\Otro\EventoRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!Auth::user()->es_admin) {
            $eventos = Evento::where('id_perfil', '=', Auth::user()->perfil->id)->get();
        } else {
            $eventos = Evento::all();
        }

        if (!$eventos) {
            return response()->json(array(
                'message' => 'No hay eventos registrados'
            ), 422);
        }

        return response()->json($eventos->toArray());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EventoRequest $request)
    {
        //
        $evento = Evento::create($request->validated());
        return response()->json($evento, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function show(Evento $evento)
    {
        //
        return response()->json($evento);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function update(EventoRequest $request, Evento $evento)
    {
        //
        $evento->update($request->validated());
        return response()->json($evento, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Evento $evento)
    {
        //
        $evento->delete();
        return response()->json(null, 204);
    }
}
