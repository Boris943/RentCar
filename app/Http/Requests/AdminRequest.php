<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class AdminRequest extends FormRequest
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
            "name" => [
                'required',
                Rule::unique('users', 'name')->ignore(auth()->user()->id)
            ],
            "email" => [
                'required', 'email',
                Rule::unique('users', 'email')->ignore(auth()->user()->id)
            ],
            'old_password' => 'nullable',
        ];
    }

    public function withValidator(Validator $validator)
    {
        if ($this->filled("old_password")) {
            $validator->addRules(["new_password" => ["required", "confirmed", "min:8"]]);
                        
            $validator->after(function (Validator $validator) {
                if (!Hash::check($this->input("old_password"), $this->user()->password)) {
                    $validator->errors()->add("old_password", "Stari password je netacan!");
                }
            });
        
        }
    }
}
