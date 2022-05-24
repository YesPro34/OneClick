<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UtilisateurRequest extends FormRequest
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
            'email' => 'required|unique:utilisateurs|email',
            'telephone' => 'required|numeric|min:10',
            'role' => 'required|max:10',
            'password' => 'required|min:8|unique:utilisateurs',
            'status' => 'required|max:10',
        ];
    }
}
