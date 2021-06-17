<?php

namespace App\Http\Requests\Educacion;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class ConocimientoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        abort_unless(
            ($this->user()->can('registrar-conocimientos') || $this->user()->can('modificar-conocimientos')),
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
            'id_titulo_ac' => 'required|exists:titulo_academico,id',
            'id_nivel_ac' => 'exists:nivel_academico,id', //no obligatorio
            'institucion_academica' => 'required|string|regex:/^[A-zÀ-ú0-9.\s]+$/|max:50',
            'fecha_inicio' => 'bail|date|date_format:d/m/Y|before_or_equal:today', //no requerido
            'fecha_fin' => 'bail|date|date_format:d/m/Y|before_or_equal:today',
            'en_curso' => 'nullable|boolean',
        ];
    }
}
