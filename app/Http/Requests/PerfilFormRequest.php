<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\App;

class PerfilFormRequest extends FormRequest
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
            'nombres' => 'min:2|max:100',
            'apellidos' => 'min:2|max:100',
            'conocimientos' => 'min:2|max:10000',
        ];
    }
    public function messages(){
        $locale = str_replace('_', '-', app()->getLocale());
        if ($locale == 'es'){
        return[
            'nombres.min' => 'El nombre(s) debe tener al menos 2 caracteres',
            'nombres.max' => 'El nombre(s) no debe tener mas de 100 caracteres',
            'apellidos.min' => 'El apellido(s) debe tener al menos 2 caracteres',
            'apellidos.max' => 'El apellido(s) no debe tener mas de 100 caracteres',
            'conocimientos.min' => 'Conocimientos debe tener al menos 2 caracteres',
            'conocimientos.max' => 'Conocimientos no debe tener mas de 10000 caracteres',
        ];
        } else {
        return[
            'nombres.min' => 'Name (s) must be at least 2 characters long',
            'nombres.max' => 'The name (s) must not be more than 100 characters',
            'apellidos.min' => 'Last name (s) must be at least 2 characters long',
            'apellidos.max' => 'The last name (s) must not be more than 100 characters',
            'conocimientos.min' => 'Knowledge must have at least 2 characters',
            'conocimientos.max' => 'Knowledge must not be more than 10,000 characters',
        ];
        }
    }
}
