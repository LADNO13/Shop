<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'title' => 'required|string',
            'description' => 'required|string',
            'content' => 'required|string',
            'preview_image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'price' => 'required|integer',
            'old_price' => 'required|integer',
            'count' => 'required|integer',
            'is_published' => 'nullable|boolean',
            'category_id' => 'nullable|exists:categories,id',
            'group_id' => 'nullable|exists:groups,id',
            'tags' => 'nullable|array',
            'tags.*' => 'exists:tags,id',
            'colors' => 'nullable|array',
            'colors.*' => 'exists:colors,id',
            'product_images' => 'nullable|array',
            'product_images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ];
    }
}
