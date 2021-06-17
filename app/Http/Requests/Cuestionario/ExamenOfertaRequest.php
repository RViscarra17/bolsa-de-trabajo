<?php

namespace App\Http\Requests\Cuestionario;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class ExamenOfertaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        abort_unless(
            ($this->user()->can('registrar-asignacion-examen') || $this->user()->can('modificar-asignacion-examen')),
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
            'id_examen' => 'required|exists:examen,id',
            'id_oferta' => 'required|exists:oferta,id',
        ];
    }
}
