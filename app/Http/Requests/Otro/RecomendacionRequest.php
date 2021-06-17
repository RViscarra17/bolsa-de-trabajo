<?php

namespace App\Http\Requests\Otro;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class RecomendacionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        abort_unless(
            ($this->user()->can('registrar-recomendaciones') || $this->user()->can('modificar-recomendaciones')),
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
            'id_perfil' => 'required|exists:perfil,id',
            'nombre_rec' => 'required|string|regex:/^[A-zÀ-ú0-9.\s]+$/|max:100',
            'telefono_rec' => 'required|string|max:16',
            'correo_rec' => 'nullable|string|regex:/^[0-9]+$/|max:255',
        ];
    }
}
