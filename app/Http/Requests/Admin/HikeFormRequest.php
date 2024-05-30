<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class HikeFormRequest extends FormRequest
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
            'title' => ['required', 'min:8'],
            'description' => ['required', 'min:8'],
            'distance' => ['required', 'integer', 'min:10'],
            'duration' => ['required', 'integer', 'min:1'],
            'elevation_gain' => ['required', 'integer', 'min:0'],
            'city' => ['required', 'min:3'],
            'country' => ['required', 'min:3'],
            'options' => ['array', 'exists:options,id', 'required'],
        ];
    }
}
