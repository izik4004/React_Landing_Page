<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
        $required = "required|string|max:255";
        return [
            'first_name' => "$required",
            'last_name' => "$required",
            'gender' => "$required",
            'date_of_birth' => 'required|date',
            'id_no' => 'nullable|string',
            'blood_group' => "$required",
            'religion' => "$required",
            'email' => 'required|email|max:255',
            'class' => "$required",
            'section' => "$required",
            'address' => "$required",
            'phone' => 'required|string|max:15',
            'bio' => "$required",
        ];
    }
}
