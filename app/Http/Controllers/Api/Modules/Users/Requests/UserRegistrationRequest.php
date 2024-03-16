<?php

namespace App\Http\Controllers\Api\Modules\Users\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

class UserRegistrationRequest extends FormRequest
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

    public function rules()
    {
        return [
            'image' => 'nullable|mimes:png,jpg,jpeg|max:1024',
            'username' => ['required', 'regex:/^\S*$/', 'max:30','required'],
            'email' => ['required', 'email', 'max:100',
                Rule::unique('users', 'email'),
            ],
            'password' => ['required', 'confirmed',
                Password::min(8)
                    ->mixedCase()
                    ->numbers()
                    ->symbols()
            ],
        ];
    }

    public function messages()
    {
        return [
            //TODO:: For any customized messages
             ];
    }
}
