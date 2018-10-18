<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentStoreRequest extends FormRequest
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
            'email' => 'required|email|unique:users',
            'name' => 'required|string|max:50',
            'phone' => 'required',
            'surname' => 'required|string|max:50'
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Įveskite elektroninio pašto adresą!',
            'email.email' => 'Įveskite teisingą elektroninio pašto adresą!',
            'name.required' => 'Įveskite vardą!',
            'surname.required' => 'Įveskite pavardę!',
            'phone.required' => 'Įveskite telefono numerį!'
        ];
    }
}
