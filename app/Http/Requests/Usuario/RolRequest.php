<?php

namespace App\Http\Requests\Usuario;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class RolRequest extends FormRequest
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
            'name' => [
                'required',
                'string',
                'regex:/^[a-zA-Z0-9-\s]+$/',
                Rule::unique('rol')->ignore(
                    ($this->rol && $this->rol->name == $this->name) ?
                        $this->rol->id : null
                )
            ],
            'display_name' => 'required|string|regex:/^[A-zÀ-ú0-9\s]+$/',
            'descripcion' => 'required|string|regex:/^[A-zÀ-ú0-9\s]+$/',
        ];
    }

    public function attributes()
    {
        return [
            'display_name' => 'Nombre',
            'name' => 'Identificador',
            'descripcion' => 'Descripción',
        ];
    }
}
