<?php

namespace App\Http\Requests\Educacion;

use Illuminate\Foundation\Http\FormRequest;

class TituloAcademicoRequest extends FormRequest
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
            'id_cat_titulo' => 'required|exists:categoria_titulo,id',
            'nombre_titulo_ac' => 'required|string|regex:/^[0-9]+$/|size:50',
            Rule::unique('titulo_academico')->ignore(
                ($this->titulo_academico && $this->titulo_academico->nombre_titulo_ac == $this->nombre_titulo_ac) ?
                    $this->titulo_academico->id : null
            )
        ];
    }
}
