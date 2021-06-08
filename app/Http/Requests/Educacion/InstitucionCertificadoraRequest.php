<?php

namespace App\Http\Requests\Educacion;

use Illuminate\Foundation\Http\FormRequest;

class InstitucionCertificadoraRequest extends FormRequest
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
            'nombre_institucion_cert' => [
                'required',
                'string',
                'regex:/^[A-zÀ-ú0-9.\s]+$/',
                'max:25',
            ]
        ];
    }
}
