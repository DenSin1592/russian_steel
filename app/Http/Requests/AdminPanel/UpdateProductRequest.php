<?php

namespace App\Http\Requests\AdminPanel;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateProductRequest extends FormRequest
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
    {   //dd($this->id);
       // $unique= Rule::unique('pricelist_product')->ignore('');
        /*|unique:pricelist_products,title'*/
        //Rule::unique('pricelist_products')->ignore($this->user->id, 'id')
        return [
            'id' => ['integer','required'],
            'title' => ['string','required','min:5','max:50', 'unique:pricelist_products,title,'. $this->id],
            'category_id' => 'integer|required|exists:pricelist_categories,id',
            'image_id' => 'integer|required|exists:pricelist_images,id',
            'is_added' => 'bool|nullable',
            'price' => 'numeric|required',
            'content_row' => 'string|min:10|max:10000'
        ];
    }
}
