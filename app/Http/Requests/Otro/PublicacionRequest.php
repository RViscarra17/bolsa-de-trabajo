<?php

namespace App\Http\Requests\Otro;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class PublicacionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        abort_unless(
            ($this->user()->can('registrar-publicaciones') || $this->user()->can('modificar-publicaciones')),
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
            //
            'id_perfil' => 'exists:perfil,id',
            'nombre_pub' => 'required|string|max:50',
            'lugar_pub' => 'required|string|max:25',
            'fecha_pub' => 'bail|required|date|date_format:d/m/Y|before_or_equal:today',
            'isbn' => 'nullable|string|max:13',
        ];
    }
}
