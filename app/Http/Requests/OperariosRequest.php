<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OperariosRequest extends FormRequest
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
            'cedula' => 'min:5|max:10|unique:operarios'
        ];
    }

    public function messages()
    {
        return [
            'cedula.required' => 'El campo es requerido',
            'cedula.min' => 'El mínimo permitido de caracteres es de 5',
            'cedula.max' => 'El máximo permitido de caracteres es de 10',
            'cedula.unique' => 'El usuario ya existe',

        ];        
    }

    public function response(array $errors)
    {
        if ($this->ajax()){
            return response()->json($errors);
        }
    }
}
