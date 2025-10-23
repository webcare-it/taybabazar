<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductUpdateRequest extends FormRequest
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
            'name'              => 'required',
            'cat_id'            => 'required|integer',
            'qty'               => 'required|integer',
            'regular_price'     => 'required',
            'product_type'      => 'required',
            'long_description'  => 'required',
        ];
    }
}
