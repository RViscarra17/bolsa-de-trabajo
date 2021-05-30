<?php

namespace App\Http\Requests\Educacion;

use Illuminate\Foundation\Http\FormRequest;

class CertificacionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
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
            'codigo_cert' => 'required|string|regex:/^[0-9]+$/|size:50',
            'nombre_cert' => 'required|string|regex:/^[0-9]+$/|size:50',
            'institucion_otorga' => 'required|string|regex:/^[0-9]+$/|size:50',
            'fecha_desde_cert' => 'bail|required|date|date_format:d/m/y|before_or_equal:today',
            'fecha_hasta_cert' => 'bail|required|date|date_format:d/m/y|before_or_equal:today',
            'id_perfil' => 'required|exists:perfil,id',
            'id_tipo_cert' => 'required|exists:tipo_certificacion,id',
            'id_instituciones_cert' => 'required|exists:institucion_certificadora,id',
        ];
    }
}
