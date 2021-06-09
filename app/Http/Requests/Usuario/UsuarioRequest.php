<?php

namespace App\Http\Requests\Usuario;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UsuarioRequest extends FormRequest
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
            'nombres' => 'required|string|regex:/^[A-zÀ-ú.\s]+$/|max:50',
            'apellidos' => 'required|string|regex:/^[A-zÀ-ú.\s]+$/|max:50',
            'email' => [
                'required',
                'email',
                'max:255',
                Rule::unique('users')->ignore($this->usuario->id ?? null),
            ],
            'password' => 'required|min:8|confirmed',
            'id_tipo_usuario' => 'nullable|exists:tipo_usuario,id',
            'roles' => 'nullable|array',
            'roles.*' => 'exists:rol,id',
        ];
    }
}
