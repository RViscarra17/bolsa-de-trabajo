<?php

namespace App\Http\Requests\Educacion;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CategoriaTituloRequest extends FormRequest
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
            'nombre_cat_titulo' => [
                'required',
                'string',
                'regex:/^[A-zÀ-ú0-9\s]+$/',
                'min:3',
                'max:50',
                Rule::unique('categoria_titulo')->ignore(
                    ($this->categoria && $this->categoria->nombre_cat_titulo == $this->nombre_cat_titulo) ?
                        $this->categoria->id : null
                )
            ],
        ];
    }
}
