<?php

namespace App\Http\Requests\Usuario;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class RedSocialRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true || $this->user()->es_admin;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre_red' => [
                'required',
                'string',
                'regex:/^[a-zA-Z0-9-\s]+$/',
                Rule::unique('red_social')->ignore(
                    ($this->red && strcasecmp($this->red->nombre_red, $this->nombre_red) == 0) ?
                        $this->red->id : null
                )
            ],
        ];
    }
}
