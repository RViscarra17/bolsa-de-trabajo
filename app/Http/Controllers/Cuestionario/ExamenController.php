<?php

namespace App\Http\Controllers\Cuestionario;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cuestionario\Examen;
use App\Http\Requests\Cuestionario\ExamenRequest;
use App\Models\Cuestionario\Opcion;
use App\Models\Cuestionario\Pregunta;
use App\Models\Cuestionario\Respuesta;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ExamenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $examenes = Examen::all();

        if (!Auth::user()->es_admin) {
            $examenes = $examenes->where('id_empresa', '=', Auth::user()->empresa->id);
        }

        return response()->json($examenes->toArray());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ExamenRequest $request)
    {
        $examen = DB::transaction(function () use ($request) {
            $examen = Examen::create($request->only('titulo_examen', 'id_empresa', 'id_tipo_examen'));
            foreach ($request->input('preguntas') as $id => $pregunta) {
                $p = Pregunta::create([
                    'id_tipo_pregunta' => $pregunta['id_tipo'],
                    'id_examen' => $examen->id,
                    'texto_pregunta' => $pregunta['texto'],
                    'multiple_respuesta' => $pregunta['multiple'] ?? false,
                    'puntos' => $pregunta['puntos'] ?? 1,
                    'orden' => $id + 1,
                ]);

                foreach ($pregunta['opciones'] as $key => $opcion) {
                    $r = Opcion::create([
                        'id_pregunta' => $p->id,
                        'texto_opcion' => $opcion['texto_opcion'],
                        'correcta' => $opcion['correcta'] ?? false,
                        'orden' => $key + 1,
                    ]);
                }
            }
            return $examen;
        });
        if ($examen) {
            return response()->json($examen->load('preguntas', 'preguntas.opciones'), 201);
        }

        return response()->json(null, 422);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Examen  $examen
     * @return \Illuminate\Http\Response
     */
    public function show(Examen $examen)
    {
        return response()->json($examen->load('preguntas', 'preguntas.opciones'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Examen  $examen
     * @return \Illuminate\Http\Response
     */
    public function update(ExamenRequest $request, Examen $examen)
    {
        $examen->update($request->validated());
        return response()->json($examen, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Examen  $examen
     * @return \Illuminate\Http\Response
     */
    public function destroy(Examen $examen)
    {
        $examen->delete();
        return response()->json(null, 204);
    }
}
