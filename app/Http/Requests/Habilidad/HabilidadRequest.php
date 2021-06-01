<?php

namespace App\Http\Requests\Habilidad;

use Illuminate\Foundation\Http\FormRequest;

class HabilidadRequest extends FormRequest
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
            'nombre_habilidad'=>'required|string|regex:/^[0-9]+$/|size:100',
            'id_cat_habilidad'=>'required|exists:categoria_habilidad,id',
        ];
    }
}
