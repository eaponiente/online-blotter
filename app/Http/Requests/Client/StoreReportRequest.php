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
            'first_name' => 'required',
            'last_name' => 'required',
            'middle_name' => 'required',
            'mobile' => 'required',
            'address' => 'required',
            'citizenship' => 'required',
            'gender' => 'required|in:male,female',
            'civil_status' => 'required',
            'date_of_birth' => 'required',
            'incident_report' => 'required',
            'filename' => 'required',
        ];
    }
}
