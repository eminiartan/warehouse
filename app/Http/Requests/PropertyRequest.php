<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PropertyRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'cost' => 'required|integer',
            'price' => 'required|integer',
            'color' => ['string', 'required'],
            'dimension' => ['string', 'required'],
            'image' => 'nullable|image|dimensions:max_width=100,max_height=200',
            'category' => ['string', 'required'],
            'product_id' => 'required' | 'exists:products,id',

        ];
    }
}
