<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules;

class CreateUserRequest extends FormRequest
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
            'name' => 'required|min:5',
            'last_name' => ['required', 'string', 'max:255'],
            'phone_number' => ['required', 'string', 'size:9'],
            'email'    => 'required|email|max:255|unique:users',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'avatar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'active' =>'boolean'
        ];
    }
}