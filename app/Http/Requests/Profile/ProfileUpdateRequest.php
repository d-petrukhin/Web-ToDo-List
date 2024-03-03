<?php

namespace App\Http\Requests\Profile;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
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
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', Rule::unique(User::class)->ignore($this->user()->id)],
            'first_name' => ['nullable', 'string', 'max:96'],
            'last_name' => ['nullable', 'string', 'max:96'],
            'middle_name' => ['nullable', 'string', 'max:96'],
            'birthday' => ['nullable', 'date'],
            'avatar' => ['nullable', 'image', 'mimes:jpeg,png,jpg'],
        ];
    }
}
