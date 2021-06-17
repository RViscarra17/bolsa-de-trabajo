<?php

namespace App\Http\Requests\Usuario;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class TelefonoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        abort_unless(
            ($this->user()->can('registrar-telefonos') || $this->user()->can('modificar-telefonos')),
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
            'numero_tel' => 'required|string|regex:/^[0-9/s]+$/|size:16',
            'id_usuario' => 'required|exists:usuario,id',
            'id_tipo_tel' => 'required|exists:tipo_telefono,id',
        ];
    }
}
