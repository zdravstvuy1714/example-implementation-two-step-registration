<?php

namespace App\Http\Requests\Authentication\Registration\TwoStep;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'country_id' => 'required|exists:countries,id',
            'biography' => 'required|string',
        ];
    }
}
