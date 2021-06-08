<?php

namespace App\Http\Requests\Cuestionario;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class TipoExamenRequest extends FormRequest
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
            'nombre_tipo_exa' => [
                'required',
                'string',
                'regex:/^[A-zÀ-ú0-9.\s]+$/',
                'max:25',
                Rule::unique('tipo_examen')->ignore(
                    ($this->tipo && strcasecmp($this->tipo->nombre_tipo_exa, $this->nombre_tipo_exa) == 0) ?
                        $this->tipo->id : null
                )
            ],
        ];
    }
}
