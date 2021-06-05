<?php

namespace App\Http\Requests\Oferta;

use Illuminate\Foundation\Http\FormRequest;

class EmpresaRequest extends FormRequest
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
            'nombre_emp' => 'required|string|regex:/^[A-zÀ-ú0-9\s]+$/|max:50',
            'razon_social' => 'nullable|string|regex:/^[A-zÀ-ú0-9\s]+$/|max:50',
            'descripcion_emp' => 'required|string|regex:/^[A-zÀ-ú0-9\s]+$/|max:255',
            'sitio_web' => 'nullable|url|max:100',
            'id_usuario' => 'required|exists:usuario,id',
            'id_sector' => 'required|exists:sector,id',
        ];
    }
}
