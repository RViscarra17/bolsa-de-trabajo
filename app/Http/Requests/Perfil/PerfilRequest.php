<?php

namespace App\Http\Requests\Perfil;

use Illuminate\Foundation\Http\FormRequest;

class PerfilRequest extends FormRequest
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
            'genero' => 'required|string|size:1',
            'dui' => 'nullable|string|regex:/^\d{8}-\d$/|size:10',
            'nit' => 'required|string|regex:/^\d{4}-\d{6}-\d{3}-\d$/|size:17',
            'nup' => 'nullable|string|regex:/^\d{12}$/|size:12',
            'fecha_nacimiento' => 'bail|required|date|date_format:d/m/Y|before:18 years ago',
            'pasaporte' => 'required|string|max:9',
            'resumen' => 'nullable|string|max:255',
            'otros_datos' => 'nullable|string|max:500',
            'disponibilidad_viaje' => 'nullable|boolean',
            'posee_vehiculo' => 'nullable|boolean',
            'puede_cambiar_res' => 'nullable|boolean',
            'id_usuario' => 'required|exists:usuario,id',
            //Array de IDs de las hobilidades y su experiencia (en años)
            'habilidades' => 'nullable|array',
            'habilidades.*' => 'distinct|exists:habilidad,id',
            'hab_exp' => 'required_with:habilidades|array',
            'hab_exp.*' => 'nullable|integer',
        ];
    }
}
