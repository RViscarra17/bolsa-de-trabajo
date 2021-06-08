<?php

namespace App\Http\Requests\Laboral;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CategoriaPuestoRequest extends FormRequest
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
            'nombre_cat_puesto' => [
                'required',
                'string',
                'regex:/^[A-zÀ-ú0-9.\s]+$/',
                'min:3',
                'max:25',
                Rule::unique('categoria_puesto')->ignore(
                    ($this->categoria && $this->categoria->nombre_cat_puesto == $this->nombre_cat_puesto) ?
                        $this->categoria->id : null
                )
            ],
        ];
    }
}
