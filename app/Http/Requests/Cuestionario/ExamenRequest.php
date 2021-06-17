<?php

namespace App\Http\Requests\Cuestionario;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;
use Illuminate\Validation\Rule;

class ExamenRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        abort_unless(
            ($this->user()->can('registrar-examenes') || $this->user()->can('modificar-examenes')),
            Response::HTTP_FORBIDDEN,
            'No tiene permiso para realizar esta acción'
        );

        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'titulo_examen' => 'required|string|max:50',
            'id_empresa' => 'required|exists:empresa,id',
            'id_tipo_examen' => 'required|exists:tipo_examen,id',
            //Preguntas
            'preguntas' => 'required|array',
            'preguntas.*.id_tipo' => 'required|exists:tipo_pregunta,id',
            'preguntas.*.texto' => 'required|string|max:100',
            'preguntas.*.puntos' => 'nullable|integer',
            'preguntas.*.multiple' => 'nullable|boolean',
            //Opciones
            'preguntas.*.opciones' => 'required|array',
            'preguntas.*.opciones.*.texto_opcion' => 'required|string|max:150',
            'preguntas.*.opciones.*.correcta' => 'nullable|boolean',
        ];
    }
}
