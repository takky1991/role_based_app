<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployerRegisterRequest extends FormRequest
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
            'name' => 'required|max:40',
            'surname' => 'required|max:40',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'phone' => 'required|numeric',
            'job_title' => 'required|max:40',
            'company_name' => 'required|max:40',
            'company_url' => 'required|url',
            'company_size' => 'required|in:1-5,6-10,11-20,21-50,51-100,100+'
        ];
    }
}
