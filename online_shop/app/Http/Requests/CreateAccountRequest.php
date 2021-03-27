<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateAccountRequest extends FormRequest
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
            'fname' => ['required', 'max:50'],
            'lname' => ['required', 'max:50'],
            'email' => ['required', 'max:200', 'email:rfc,dns'],
            'password' => ['required', 'max:50'],
        ];
    }
}
