<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ManagerRequest extends FormRequest
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
        if ($this->route()->uri() == 'login-chk') {
            return [
                'email' => ['required', 'email'],
                'password' => ['required'],
            ];
        }
        switch ($this->method()) {
            case 'POST':
                return [
                    'name' => ['required', 'string'],
                    'email' => ['required', 'email', 'unique:managers,email'],
                    'password' => ['required'],
                ];

            case 'GET':
                return [

                ];
            default:
                return [];
        }
    }

    public function messages()
    {

        return [
            'name.required' => 'please provide :attribute ',
            'name.string' => 'please enter valid string',
            'email.required' => ':attribute is missing please enter',
            'email.email' => 'please enter valid :attribute address',
            'email.unique' => ':attribute already taken',
            // 'email.required' => ':attribute field is mandatory',
            'password' => 'Password is mandatory',
        ];

    }
}
