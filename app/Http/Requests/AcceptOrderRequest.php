<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AcceptOrderRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'order_id' => 'required',
            'time_of_preparation' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'order_id.required' => 'مشخص کردن سفارش موردنظر الزامی است.',
            'time_of_preparation.required' => 'اعلام مدت زمان آماده سازی این سفارش الزامی است.',
        ];
    }
}
