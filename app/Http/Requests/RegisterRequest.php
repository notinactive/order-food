<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'mobile' => 'required|iran_mobile|unique:users,mobile',
        ];
    }

    public function messages()
    {
        return [
            'mobile.required' => 'وارد کردن شماره همراه الزامی است.',
            'mobile.iran_mobile' => 'یک شماره همراه معتبر وارد نمائید.',
            'mobile.unique' => 'با این شمراه همراه قبلا ثبت نام کرده اید.',
        ];
    }
}
