<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRegistrationRequest extends FormRequest
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
            'email' => 'required',
            'name' => 'required',
            'designation' => 'required',
            'company' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'country' => 'required',
            'telephone_number' => 'required',
            'country_code' => 'required',
            'mobile_number' => 'required'
        ];
    }
}