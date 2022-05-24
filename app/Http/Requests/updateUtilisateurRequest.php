<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class updateUtilisateurRequest extends FormRequest
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
            'name' => 'required|max:30',
            'email' => 'required|email',
            'telephone' => 'required|numeric|min:10',
            'role' => 'required|max:20',
            'password' => 'required|min:8',
            'status' => 'required|max:10',
        ];
    }
}
