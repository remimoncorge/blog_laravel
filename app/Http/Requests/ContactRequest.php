<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
        // On veut un nom, un email et un message limité en nombre de caractères

        return [
            'nom' => 'required',
            'email' => 'required|email',
            'message' => 'required|max:900',
        ];
    }
}
