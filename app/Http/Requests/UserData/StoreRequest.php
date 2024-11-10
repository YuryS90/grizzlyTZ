<?php

namespace App\Http\Requests\UserData;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'family' => 'required|string|max:255',
            'lastname' => 'nullable|string|max:255',
            'dateOfBirth' => 'required',
            'email' => 'nullable|string',
            'code' => 'required|string',
            'phone' => 'required|string',
            'status' => 'required|string',
            'about' => 'nullable|string|max:1000',
        ];
    }
}
