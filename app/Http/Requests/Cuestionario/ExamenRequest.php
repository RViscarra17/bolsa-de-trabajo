<?php

namespace App\Http\Requests\Cuestionario;

use Illuminate\Foundation\Http\FormRequest;
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
            'id_empresa' => 'exists:empresa,id',
            'id_tipo_examen' => 'exists:empresa,id',
        ];
    }
}
