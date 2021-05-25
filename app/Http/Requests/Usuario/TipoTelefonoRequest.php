<?php

namespace App\Http\Requests\Usuario;

use Illuminate\Foundation\Http\FormRequest;

class TipoTelefonoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true || $this->user()->es_admin;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre_tipo_tel' => 'required|string',
        ];
    }

    public function attributes()
    {
        return [
            'nombre_tipo_tel' => 'nombre',
        ];
    }
}
