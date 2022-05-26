<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class updateDevisRequest extends FormRequest
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
            'nom' => 'required|max:30',
            'telephone' => 'required|numeric|min:10',
            'email' => 'required|email',
            'type_demande' => 'required',
            'status' => 'required',
            'message' => 'required|min:10',
        ];
    }
}
