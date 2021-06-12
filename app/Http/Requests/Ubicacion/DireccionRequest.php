<?php

namespace App\Http\Requests\Ubicacion;

use Illuminate\Foundation\Http\FormRequest;

class DireccionRequest extends FormRequest
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
            'codigo_postal' => 'required|string|regex:/^[A-z0-9\s]+$/|max:15',
            'ubicacion' => 'required|string|max:100',
            'detalles_extra' => 'required|string|max:50',
            'id_ciudad' => 'required|exists:ciudad,id',
            'id_usuario' => 'required|exists:usuario,id',
        ];
    }
}
