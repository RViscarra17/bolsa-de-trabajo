<?php

namespace App\Http\Requests\Habilidad;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CategoriaHabilidadRequest extends FormRequest
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
            'nombre_cat_habilidad' => [
                'required',
                'string',
                'regex:/^[A-zÀ-ú0-9\s]+$/',
                'min:3',
                'max:50',
                Rule::unique('categoria_habilidad')->ignore(
                    ($this->categoria && $this->categoria->nombre_cat_habilidad == $this->nombre_cat_habilidad) ?
                        $this->categoria->id : null
                )
            ],
        ];
    }
}
