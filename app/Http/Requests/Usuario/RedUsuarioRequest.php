<?php

namespace App\Http\Requests\Usuario;

use Illuminate\Foundation\Http\FormRequest;

class RedUsuarioRequest extends FormRequest
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
            'id_red' => 'required|exists:red_social,id',
            'id_usuario' => 'required|exists:usuario,id',
            'nombre_usuario' => 'required|string|min:4|max:50',
            'enlace_red' => 'nullable|url|max:255',
        ];
    }
}
