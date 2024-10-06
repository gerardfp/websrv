<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFilmRequest extends FormRequest
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
            'title' => ['required', 'string', 'max:255'],
            'plot' => ['required', 'string', 'max:255'],
            'poster_url' => ['required', 'string'],
            'year' => ['required', 'numeric', 'between:1940,2024'],
            'rating' => ['required', 'numeric', 'between:0,5'],
        ];
    }
}
