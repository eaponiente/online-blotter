<?php

namespace App\Http\Requests\Client;

use Illuminate\Foundation\Http\FormRequest;

class StoreReportRequest extends FormRequest
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
            'type' => 'required',
            'civil_status' => 'required',
            'first_name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
            'suffix' => 'nullable',
            'email' => 'nullable|email',
            'mobile' => 'required',
            'present_address' => 'required',
            'permanent_address' => 'nullable',
            'citizenship' => 'required',
            'gender' => 'required|in:male,female',
            'others' => 'required_if:type,others',
            'birth_day' => 'required',
            'birth_month' => 'required',
            'birth_year' => 'required',
            'when_day' => 'required',
            'when_month' => 'required',
            'when_year' => 'required',
            'when_hours' => 'required',
            'when_minutes' => 'required',
            'who' => 'required',
            'where' => 'required',
            'synopsis' => 'required',
            'filename' => 'required',
        ];
    }
}
