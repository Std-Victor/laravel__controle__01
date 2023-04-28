<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LivreValidation extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'titre' => 'required|string|alpha_num:ascii|max:80',
            'auteur' => 'required|string|alpha:ascii|max:100',
            'prix' => 'numeric|min:0',
            'annee' => 'required|between:1800,'.now()->year,
            'couverture' => 'mimes:jpg,png,jpeg',
        ];
    }
}
