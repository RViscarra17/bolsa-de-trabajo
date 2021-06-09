<?php

namespace App\Http\Requests\Habilidad;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class IdiomaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        abort_unless(
            $this->user()->es_admin,
            Response::HTTP_FORBIDDEN,
            'No puede realizar esta acción, faltan permisos'
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
            'nombre_idioma' => 'required|string|regex:/^[A-zÀ-ú\s]+$/|max:25',
            'codigo_idioma' => 'required|string|regex:/^[A-Z]+$/|max:3',
        ];
    }
}
