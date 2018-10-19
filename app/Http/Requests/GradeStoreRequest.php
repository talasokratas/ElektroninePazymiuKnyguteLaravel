<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GradeStoreRequest extends FormRequest
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
            'student_id' => 'required | integer',
            'lecture_id' => 'required | integer',
            'grade' => 'required | integer | between:0,10'
        ];
    }

    public function messages()
    {
        return [
            'grade.required' => 'Įveskite įvertinimą!',
            'grade.between' => 'Įvertinimas turi būti tarp 0 ir 10!',
            'grade.integer' => 'Įvestas įvertinimas nėra skaičius!',
            'student_id.required' => 'Pasirinkite studentą!',
            'lecture_id.required' => 'Pasirinkite paskaitą!'
        ];
    }
}
