<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FiliereStore extends FormRequest
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
            'nom'=>'required|string|min:2|unique:filieres'
        ];
    }
    public function messages()
    {
        return [
            'nom.required'=>'nom darouri!',
            'nom.unique'=>'nom kayn deja!!!',
        ];
    }
}
