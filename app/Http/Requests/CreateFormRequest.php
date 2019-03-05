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
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        $rules = [
            'name' => 'required|string',
            'quantity' => 'required|integer',
            'price' => 'required|between:0,99999999.99',
            
        ];

        
        return $rules;
    }

    public function messages() {
        return [
            'name.required' => 'The name is required',
            'quantity.required' => 'The name is required',
            'price.required' => 'The name is required',
        ];
    }

}
