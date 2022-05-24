<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEssaiRequest extends FormRequest
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
            'name'=>'required|min:5|max:30',
            'phone'=>'required|numeric|min:10',
            'entreprise'=>'required|min:3|max:30',
            'tel_entreprise'=>'required|numeric|min:10',
            'position'=>'required|min:5|max:30',
            'adresse'=>'required|min:5|max:100',
            
        ];
    }
}