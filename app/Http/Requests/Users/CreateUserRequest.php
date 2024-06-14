<?php

namespace App\Http\Requests\Users;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            "firstName" => ["required", "min:2", "max:255"],
            "lastName" => ["required", "min:2", "max:255"],
            "firstName" => ["required", "min:2", "max:255"],
            "username" => ["required", "min:2", "max:255", "regex:/^[a-zA-Z0-9\.\-\_]+$/"],
            "email" => ["required", "email"],
            "password" => ["required", "min:8"],
            "reTypedPassword" => ["required", "min:8"],
        ];
    }
}
