<?php

namespace App\Http\Requests\Otro;

use Illuminate\Foundation\Http\FormRequest;

class LogroRequest extends FormRequest
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
            'nombre_logro' => 'required|string|max:50',
            'fecha_logro' => 'bail|required|date|date_format:d/m/Y|before_or_equal:today',
            'id_perfil' => 'required|exists:perfil,id',
            'id_tipo_logro' => 'required|exists:tipo_logro,id',
        ];
    }
}
