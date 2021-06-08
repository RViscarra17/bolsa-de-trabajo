<?php

namespace App\Http\Requests\Otro;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class TipoLogroRequest extends FormRequest
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
            'nombre_tipo_logro' => [
                'required',
                'string',
                'regex:/^[A-zÀ-ú0-9.\s]+$/',
                'max:25',
                Rule::unique('tipo_logro')->ignore(
                    ($this->tipo && strcasecmp($this->tipo->nombre_tipo_logro, $this->nombre_tipo_logro) == 0) ?
                        $this->tipo->id : null
                )
            ],
        ];
    }
}
