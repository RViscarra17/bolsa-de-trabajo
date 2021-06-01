<?php

namespace App\Http\Requests\Habilidad;

use Illuminate\Foundation\Http\FormRequest;

class NivelIdiomaRequest extends FormRequest
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
            'id_tipo_nivel'=>'required|exists:tipo_nivel,id',
            'nombre_nivel_idioma'=>'required|string|regex:/^[0-9]+$/|size:100',
        ];
    }
}
