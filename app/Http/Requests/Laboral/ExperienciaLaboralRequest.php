<?php

namespace App\Http\Requests\Laboral;

use Illuminate\Foundation\Http\FormRequest;

class ExperienciaLaboralRequest extends FormRequest
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
            'empresa' => 'required|string|regex:/^[A-zÀ-ú0-9.\s]+$/|max:50',
            'telefono_emp' => 'nullable|string|regex:/^[0-9\s]+$/|size:16',
            'correo_emp' => 'nullable|email|max:255',
            'funciones' => 'required|string|regex:/^[A-zÀ-ú0-9.\s]+$/|max:500',
            'fecha_desde' => 'bail|required|date|date_format:d/m/Y|before:today',
            'fecha_hasta' => 'bail|nullable|date|date_format:d/m/Y|before_or_equal:today',
            'trabajo_Actual' => 'nullable|boolean',
            'id_perfil' => 'required|exists:perfil,id',
            'id_puesto' => 'required|exists:perfil,id',
        ];
    }
}
