<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
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
            'name'      => 'required|string|max:255',
            'username'  => 'required|min:5|max:255|unique:users|alpha_dash',
            'email'     => 'required|email:dns|unique:users',
            'password'  => 'required|min:5|max:255'
        ];
    }
}
