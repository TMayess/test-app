<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductFormRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'reference_product' => 'nullable|string|max:255',
            'dimensions' => 'nullable|string|max:255',
            'materials' => 'nullable|string|max:255',
            'color' => 'nullable|string|max:255',
        ];
    }
}
