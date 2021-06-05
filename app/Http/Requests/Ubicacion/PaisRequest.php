<?php

namespace App\Http\Requests\Ubicacion;

use Illuminate\Foundation\Http\FormRequest;

class PaisRequest extends FormRequest
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
            'nombre_pais' => 'required|string|regex:/^[A-zÀ-ú0-9\s]+$/|max:50',
            'codigo_pais' => 'required|string|regex:/^[A-Z]+$/|max:3',
            'prefijo' => 'required|string|regex:/^[0-9-]+$/|max:10',
        ];
    }
}
