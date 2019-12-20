<?php

namespace App\Http\Requests\AdminPanel;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => "required|unique:pricelist_products,title|string|min:3|max:50",
            'category_id' => 'exists:pricelist_categories,id|integer|required',
            'image_id' => 'exists:pricelist_images,id|integer|required',
            'is_added' => 'boolean|required',
            'price' => "numeric|required",
            'content_row' =>"string|min:10|max:10000"
        ];
    }
}
