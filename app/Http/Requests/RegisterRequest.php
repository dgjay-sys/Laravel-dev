<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules;

class RegisterRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'branch' => [ 'required','string', 'max:255'],
            'username' => ['required', 'string', 'max:30', 'min:5'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ];
    }

    public function messages()
    {
        return [
            // Custom error messages for each validation rule
            'name.required' => 'Please provide your name.',
            'name.max' => 'Your name must not exceed :max characters.',
            
            'email.required' => 'Please provide an email address.',
            'email.email' => 'Please provide a valid email address.',
            'email.max' => 'Your email must not exceed :max characters.',
            'email.unique' => 'This email address is already registered.',
            
            'branch.required' => 'select a branch',
            
            'username.required' => 'Please choose a username.',
            'username.max' => 'Your username must not exceed :max characters.',
            'username.min' => 'Your username must be at least :min characters.',
            
            'password.required' => 'Please provide a password.',
            'password.confirmed' => 'Passwords do not match.',
            // You might have more custom messages for password requirements.
        ];
    }
}
