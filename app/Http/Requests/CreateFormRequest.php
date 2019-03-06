<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateFormRequest extends FormRequest {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        $rules = [
            'product_name' => 'required|string',
            'quantity' => 'required|integer',
            'price' => 'required|regex:/^\d+(\.\d{1,2})?$/',
            
        ];

        
        return $rules;
    }

    public function messages() {
        return [
            'product_name.required' => 'The product name is required',
            'quantity.required' => 'The quantity is required',
            'price.required' => 'The price is required',
        ];
    }

}
