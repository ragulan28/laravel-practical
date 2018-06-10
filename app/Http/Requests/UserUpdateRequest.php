<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
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
            'first_name' => 'required',
            'last_name' => 'required',
            'age' => 'required|numeric',
            'address' => 'required'
        ];
    }
    public  function messages() {
        return [
            'first_name.required' => 'No first name',
            'last_name.required' => 'No Last name',
            'age.required' => 'no age',
            'age.numeric' => 'age shude be numeric',
            'address.unique' => 'No address'
        ];
    }
}
