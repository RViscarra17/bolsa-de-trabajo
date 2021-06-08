<?php

namespace App\Http\Requests\Otro;

use Illuminate\Foundation\Http\FormRequest;

class EventoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
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
