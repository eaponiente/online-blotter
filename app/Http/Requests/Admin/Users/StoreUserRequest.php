<?php

namespace App\Http\Requests\Admin\Users;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
        $user = $this->route('user') ?? 'NULL';

        if($user != 'NULL') {
            return [
                'username' => 'required|unique:users,username,' . $user,
                'password' => 'nullable|string|min:4',
                'first_name' => 'required',
                'middle_name' => 'required',
                'last_name' => 'required',
                'position' => 'nullable',
                'station_id' => 'nullable|exists:stations,id',
                'mobile' => 'required',
            ];
        }

        return [
            'username' => 'required|unique:users',
            'password' => 'required|string|min:4',
            'first_name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
            'position' => 'nullable',
            'station_id' => 'nullable|exists:stations,id',
            'mobile' => 'required',
        ];
    }
}
