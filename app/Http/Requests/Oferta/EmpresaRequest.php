<?php

namespace App\Http\Requests\Oferta;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class EmpresaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        abort_unless(
            ($this->user()->can('registrar-empresa') || $this->user()->can('modificar-empresa')),
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
            'nombre_emp' => 'required|string|regex:/^[A-zÀ-ú0-9.\s]+$/|max:50',
            'razon_social' => 'nullable|string|regex:/^[A-zÀ-ú0-9.\s]+$/|max:50',
            'descripcion_emp' => 'required|string|max:255',
            'direccion_emp' => 'required|string|regex:/^[A-zÀ-ú0-9.\s]+$/|max:100',
            'sitio_web' => 'nullable|url|max:100',
            'id_usuario' => 'required|exists:usuario,id',
            'id_sector' => 'required|exists:sector,id',
        ];
    }
}
