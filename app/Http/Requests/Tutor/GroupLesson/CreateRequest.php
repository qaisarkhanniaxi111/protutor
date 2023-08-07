<?php

namespace App\Http\Requests\Tutor\GroupLesson;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
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
            'title' => ['required', 'string', 'max:255'],
            'grade' => ['required', 'integer'],
            'subject' => ['required', 'integer'],
            'participants' => ['required', 'integer'],
            'price' => ['required', 'regex:/^\d+(\.\d{1,2})?$/'],
            'registration_start_date' => ['required', 'date'],
            'registration_end_date' => ['required', 'date'],
            'class_start_date' => ['required', 'date'],
            'class_end_date' => ['required', 'date'],
        ];
    }
}
