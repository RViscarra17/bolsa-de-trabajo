<?php

namespace App\Http\Requests\Educacion;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class NivelAcademicoRequest extends FormRequest
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
            'nombre_nivel_ac' => [
                'required',
                'string',
                'regex:/^[A-zÀ-ú0-9\s]+$/',
                'min:3',
                'max:50',
                Rule::unique('nivel_academico')->ignore(
                    ($this->nivel && $this->nivel->nombre_nivel_ac == $this->nombre_nivel_ac) ?
                        $this->nivel->id : null
                )
            ],
        ];
    }
}
