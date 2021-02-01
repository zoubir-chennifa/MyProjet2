<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class offerRequest extends FormRequest
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
    public function rules()//validation de form request
    {
        return [
            'name_fr'=>'required|max:100|unique:offers,name_fr',
            'name_en'=>'required|max:100|unique:offers,name_en',
            'price'=>'required|numeric',
            'details_fr'=>'required',
            'details_en'=>'required',
            ];
    }

    public function  messages()//les message de validation
    {
        return  ['name.required'=>__('masseges.Offer name required'),
         'name.unique'=>__('masseges.Offer name unique'),
         'details.required'=>__('masseges.Offer details required'),
         'price.numeric'=>__('masseges.Offer price numeric'),
         'price.required'=>__('masseges.Offer price required'),];
    }
}
