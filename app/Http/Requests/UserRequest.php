<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserRequest extends FormRequest
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
        return ($this->method() == 'PUT') ? $this->update() : $this->store();

    }

    private function update()
    {
        $rules = [
            'name' => 'required|max:255',
            'country_id' => 'required|max:255',
            'rol' => 'required|max:255',
            'email' => ['required',
                Rule::unique('users')->ignore($this->route('user')),
                'email',
                'max:255'
            ]
        ];
        if ($this->filled('password')) {
            $rules['password'] = ['required', 'min:6', 'confirmed'];
        }
        return $rules;

    }

    private function store()
    {
        return [
            'name' => 'required|max:255',
            'password' => 'required|min:6|confirmed',
            'country_id' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'rol' => 'required|max:255',
        ];
    }
}
