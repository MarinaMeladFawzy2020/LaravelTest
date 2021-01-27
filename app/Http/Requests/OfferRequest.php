<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OfferRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;       //Convert return to true to solve problem (403|This action is unauthorized).
    } 

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name_en'=> 'required | max:100 | unique:offers,name_en',
            'name_ar'=> 'required | max:100 | unique:offers,name_ar',
            'price'=> 'required | numeric' ,
            'details'=> 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' =>__('messages.offernamereq'),  // read from folder lang (ar - en ) -> file messages
            'name.unique' => 'الاسم موجود ' ,
            'price.required' => 'السعر مطلوب ' ,
        ];
    }
}
