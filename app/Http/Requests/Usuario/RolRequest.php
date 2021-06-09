<?php

namespace App\Http\Requests\Usuario;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;
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
        abort_unless(
            $this->user()->es_admin,
            Response::HTTP_FORBIDDEN,
            'No tiene permiso para realizar esta acción'
        );
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
            'permisos' => 'nullable|array',
            'permisos.*' => 'exists:permiso,id'
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
