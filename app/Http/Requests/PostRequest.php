<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title'=> 'required ',
            'content'=> 'required | min:5',
            'author'=> 'required', 
            'img'=> 'nullable'

        ];
    }

    public function messages(): array
    {
        return[
            'title.required' => 'Il titolo è obbligatorio',
           
            'content.required' => 'Il contenuto è obbligatorio',
            'content.min' => 'Il contenuto deve avere almeno :min caratteri',
            'author.required' => 'L\'autore è obbligatorio',

      
        ];
    }
}
