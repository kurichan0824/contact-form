<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
           'category_id' => 'required|exists:categories,id',
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'gender' => 'required|integer',
        'email' => 'required|email|max:255',
        'tel' => 'required|string|max:255',
        'address' => 'required|string|max:255',
        'detail' => 'required|string',
        'building' => 'nullable|string|max:255', 
        ];
    }

    
     public function messages()
     {
         return [
              'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'gender' => 'required|in:1,2,3',
        'email' => 'required|email|max:255',
        'tel' => 'required|string|max:255',
        'address' => 'required|string|max:255',
        'category_id' => 'required',
        'detail' => 'required|string|max:120',
             
         ];
     }
}
