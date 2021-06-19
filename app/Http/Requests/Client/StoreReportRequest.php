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
        return false;
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
            'email' => 'required|email',
            'mobile' => 'required',
            'present_address' => 'nullable',
            'permanent_address' => 'required',
            'citizenship' => 'required',
            'gender' => 'required|in:male,female',
            'date_of_birth' => 'required',
            'who' => 'required',
            'what' => 'required',
            'where' => 'required',
            'when' => 'required',
            'how' => 'required',
            'synopsis' => 'required',
            'filename' => 'required',
        ];
    }
}
