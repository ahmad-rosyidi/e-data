<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsersRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules()
    {
        return [
            'name' => 'required|max:30|regex:/^[\pL\pM ]+$/u',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:6',
            'type' => 'required|in:0,1,3,4',
            'status' => 'required|in:0,1',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Please enter your name!',
            'name.max' => 'Name maximum 30 characters!',
            'name.regex' => 'Invalid name!',

            'email.required' => 'Please enter your email!',
            'email.unique' => 'This email has already exists!',

            'type.in' => 'Invalid!',

            'status.in' => 'Invalid!',
        ];
    }
}
