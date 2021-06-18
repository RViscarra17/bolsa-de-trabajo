<?php

namespace App\Http\Requests\Habilidad;

use Illuminate\Foundation\Http\FormRequest;

class HabilidadOfertaRequest extends FormRequest
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
            'id_habilidad' => 'required|exists:habilidad,id',
            'id_oferta' => 'required|exists:oferta,id',
            'experiencia' => 'nullable|integer',
        ];
    }
}
