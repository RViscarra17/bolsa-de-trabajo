<?php

namespace App\Http\Requests\Otro;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class EventoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        abort_unless(
            ($this->user()->can('registrar-eventos') || $this->user()->can('modificar-eventos')),
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
            //
            'id_perfil' => 'required|exists:perfil,id',
            'id_pais' => 'nullable|exists:pais,id',
            'lugar' => 'required|string|max:50',
            'anfitrion' => 'required|string|max:50',
            'fecha_evento' => 'bail|required|date|date_format:d/m/Y|before_or_equal:today',
        ];
    }
}
