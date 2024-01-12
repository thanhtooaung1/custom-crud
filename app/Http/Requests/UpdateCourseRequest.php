<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateCourseRequest extends FormRequest
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
            'name' => 'required',
            'fee' => 'required|numeric',
            'level' => ['required', Rule::in('Basic', 'Intermediate', 'Advance')],
            'type' => ['required', Rule::in('Online', 'Offline')],
            'start_date' => 'required|date',
            'end_date' => 'date',
        ];
    }
}
