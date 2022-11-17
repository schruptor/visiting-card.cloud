<?php

namespace App\Http\Requests\Cards;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => 'required|string',
            'prename' => 'required|string',
            'name' => 'required|string',
            'company' => 'nullable|string',
            'type' => Rule::in(array_keys(config('card.type'))),
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
