<?php

namespace App\Http\Requests\Habilidad;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class IdiomaPerfilRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        abort_unless(
            ($this->user()->can('registrar-idiomas') || $this->user()->can('modificar-idiomas')),
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
            'id_idioma' => 'required|exists:idioma,id',
            'id_perfil' => 'required|exists:perfil,id',
            //Detalle idioma
            'detalle' => 'nullable|array',
            'detalle.*.habilidad' => 'required|exists:habilidad_idioma,id',
            'detalle.*.nivel' => 'required|exists:nivel_idioma,id',
        ];
    }
}
