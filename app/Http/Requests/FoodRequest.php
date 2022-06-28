<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FoodRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'food_id' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'food_id.required' => 'مشخص کردن غذای موردنظر الزامی است.',
        ];
    }
}
