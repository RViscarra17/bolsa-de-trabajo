<?php

namespace App\Http\Requests\Otro;

use Illuminate\Foundation\Http\FormRequest;

class PublicacionRequest extends FormRequest
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
            'id_perfil' => 'required|exists:perfil,id',
            'nombre_pub' => 'required|string|max:50',
            'lugar_pub' => 'required|string|max:25',
            //'fecha_pub'=>'required',
            'isbn' => 'required|string|max:15'
        ];
    }
}
