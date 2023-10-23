<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProjectRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title'=>'required|string',
            'description'=>'required|string',
            'url'=>'required|string',
        ];
    }

    public function messages()
    {
        return [ 

            'title.required'=> 'Il titolo non può essere vuoto',
            'title.string'=> 'Il titolo deve essere una stringa',
            'description.required'=> 'La descrizione non può essere vuota',
            'description.string'=> 'La descrizione deve essere una stringa',
            'url.required'=> 'L\'url non deve essere vuoto',
            'url.string'=> 'L\'url deve essere una stringa',

        ];
    }
}
