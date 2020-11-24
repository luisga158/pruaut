<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\App;

class PostFormRequest extends FormRequest
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
            'title' => 'required|min:5|max:100',
            'content' => 'required|min:15|max:100000',
        ];
    }
    public function messages(){
        $locale = str_replace('_', '-', app()->getLocale());
        if ($locale == 'es'){
        return[
            'title.required' => 'El titulo es requerido',
            'title.min' => 'El titulo debe tener al menos 5 caracteres',
            'title.max' => 'El titulo no debe tener mas de 100000 caracteres',
            'content.required' => 'El contenido es requerido',
            'content.min' => 'El contenido debe tener al menos 15 caracteres',
            'content.max' => 'El contenido no debe tener mas de 1000000 caracteres',
        ];
        } else {
        return[
            'title.required' => 'Title is required',
            'title.min' => 'The title must be at least 5 characters',
            'title.max' => 'The title must not be more than 100 characters',
            'content.required' => 'Content is required',
            'content.min' => 'Content must be at least 15 characters',
            'content.max' => 'The content must not be more than 1000 characters',
        ];
        }
    }
}