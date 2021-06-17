<?php

namespace App\Http\Requests\Educacion;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class CertificacionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        abort_unless(
            ($this->user()->can('registrar-cetificaciones') || $this->user()->can('modificar-cetificaciones')),
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
            'codigo_cert' => 'required|string|regex:/^[A-zÀ-ú0-9.\s]+$/|max:25',
            'nombre_cert' => 'required|string|regex:/^[A-zÀ-ú0-9.\s]+$/|max:50',
            'institucion_otorga' => 'required|string|regex:/^[A-zÀ-ú0-9.\s]+$/|max:25',
            'fecha_desde_cert' => 'bail|required|date|date_format:d/m/Y|before_or_equal:today',
            'fecha_hasta_cert' => 'bail|required|date|date_format:d/m/Y|before_or_equal:today',
            'id_perfil' => 'required|exists:perfil,id',
            'id_tipo_cert' => 'required|exists:tipo_certificacion,id',
            'id_instituciones_cert' => 'required|exists:institucion_certificadora,id',
        ];
    }
}
