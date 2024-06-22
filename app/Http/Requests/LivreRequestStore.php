<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class LivreRequestStore extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if(isset(Auth::user()->role) && Auth::user()->role=="admin" )
        return true;
    else return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'titre'=>'required|min:3|unique:livres',
            'prix'=>'numeric|between:100,1000',
            'photo'=>'required|max:2048|image'
        ];
    }
}
