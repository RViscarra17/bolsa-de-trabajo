<?php

namespace App\Http\Requests\Usuario;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Validator;

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
            'correo' => [
                'required',
                'email',
                'max:255',
                Rule::unique('usuario')->ignore($this->usuario->id ?? null),
            ],
            'password' => 'sometimes|required|min:8|confirmed',
            'id_tipo_usuario' => 'required|exists:tipo_usuario,id',
            'id_pais' => 'nullable|exists:pais,id',
            'bloqueado' => 'nullable|boolean',
            'activo' => 'nullable|boolean',
            'roles' => 'nullable|array',
            'roles.*' => 'exists:rol,id',
        ];
    }

    protected function prepareForValidation()
    {
        if ($this->method() == 'PUT' && is_null($this->password)) {
            $this->request->remove('password');
        }
    }

    public function withValidator(Validator $validator): void
    {
        $validator->after(function () {
            if (!is_null($this->password)) {
                $this->merge(['password' => Hash::make($this->password)]);
            }
        });
    }
}
