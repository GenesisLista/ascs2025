<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAbstractSubmissionRequest extends FormRequest
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
            'author' => 'required',
            'email' => 'required',
            'country' => 'required',
            'code' => 'required',
            'phone' => 'required',
            'company' => 'required',
            'presenter' => 'required',
            'title' => 'required',
            'biography' => 'required',
            'theme_id' => 'required',
            'poster_id' => 'required',
            'abstract_path' => 'required|mimes:pdf|max:15360' // 15MB x 1024
        ];
    }
}
