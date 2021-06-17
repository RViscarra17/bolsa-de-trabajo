<?php

namespace App\Http\Requests\Usuario;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class RedUsuarioRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        abort_unless(
            ($this->user()->can('registrar-redes') || $this->user()->can('modificar-redes')),
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
            'id_red' => 'required|exists:red_social,id',
            'id_usuario' => 'required|exists:usuario,id',
            'nombre_usuario' => 'required|string|min:4|max:50',
            'enlace_red' => 'nullable|url|max:255',
        ];
    }
}
