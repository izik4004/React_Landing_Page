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
        $nullable = "nullable|string|max:255";
        return [
            'first_name' => "$required",
            'last_name' => "$required",
            'gender' => "$required",
            'date_of_birth' => 'required|date',
            'roll' => "$nullable",
            'id_no' => "$nullable",
            'blood_group' => "$required",
            'religion' => "$required",
            'email' => 'required|email|max:255|unique:users',
            'class' => "$required",
            'section' => "$required",
            'address' => "$nullable",
            'admission_id' => "$nullable",
            'phone' => "$nullable",
            'bio' => "$nullable",
            'photo' => 'required|mimes:jpeg,png,jpg,svg'
        ];
    }
}
