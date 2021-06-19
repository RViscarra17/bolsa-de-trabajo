<?php

namespace App\Http\Requests\Oferta;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class AplicacionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        abort_unless(
            ($this->user()->can('registrar-aplicacion') || $this->user()->can('modificar-aplicacion')),
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
            'id_usuario' => 'required|exists:usuario,id',
            'id_oferta' => 'required|exists:oferta,id',
            'id_estado_ap' => 'nullable|exists:estado_aplicacion,id',
            'fecha_ap' => '',
        ];
    }
}
