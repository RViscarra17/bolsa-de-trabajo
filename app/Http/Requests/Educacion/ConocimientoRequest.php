<?php

namespace App\Http\Requests\Educacion;

use Illuminate\Foundation\Http\FormRequest;

class ConocimientoRequest extends FormRequest
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
            'id_perfil'=> 'required|exists:perfil,id',
            'id_titulo_ac'=> 'required|exists:titulo_academico,id',
            'id_nivel_ac'=> 'exists:nivel_academico,id',//no obligatorio
            'institucion_academica'=> 'required|string|regex:/^[0-9]+$/|size:50',
            'fecha_inicio' => 'bail|date|date_format:d/m/y|before_or_equal:today',//no requerido
            'fecha_fin'=> 'bail|date|date_format:d/m/y|before_or_equal:today',
            'en_curso'=>'boolean',
        ];
    }
}
