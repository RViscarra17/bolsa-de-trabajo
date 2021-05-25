<?php

namespace App\Http\Requests\Usuario;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PermisoRequest extends FormRequest
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
                'regex:/^[a-z0-9-]+$/',
                Rule::unique('permiso')->ignore(
                    ($this->permiso && $this->permiso->name == $this->name) ?
                        $this->permiso->id : null
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
