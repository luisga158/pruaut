<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TemaFormRequest extends FormRequest
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
            'nombretema' => 'required|min:2|max:100',
        ];
    }
    public function messages(){
        $locale = str_replace('_', '-', app()->getLocale());
        if ($locale == 'es'){
            return[
                'nombretema.required' => 'El tema es requerido',
                'nombretema.min' => 'El tema debe tener al menos 2 caracteres',
                'nombretema.max' => 'El tema no debe tener mas de 100 caracteres',
            ];
        } else {
            return[
                'nombretema.required' => 'Title is required',
                'nombretema.min' => 'The topic must be at least 2 characters',
                'nombretema.max' => 'The topic must not be more than 100 characters',
            ];
        }
    }
}
