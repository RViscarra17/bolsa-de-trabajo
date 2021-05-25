<?php

namespace App\Http\Requests\Usuario;

use Illuminate\Foundation\Http\FormRequest;

class TelefonoRequest extends FormRequest
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
            'numero_tel' => 'required|string|regex:/^[0-9]+$/|size:8',
            'id_usuario' => 'required|exists:usuario,id',
            'id_tipo_tel' => 'required|exists:tipo_telefono,id',
        ];
    }
}
