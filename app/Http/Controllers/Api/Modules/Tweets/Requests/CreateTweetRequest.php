<?php

namespace App\Http\Controllers\Api\Modules\Tweets\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CreateTweetRequest extends FormRequest
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
            'tweet' => ['required', 'string', 'max:140'],
            'user_id' => ['required', Rule::exists('users','id')->whereNull('deleted_at')],
        ];
    }
}
