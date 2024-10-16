<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    
    public function authorize()
    {
        return true; // نعم
    }

   
    public function rules()
    {
        return [
            'name' => 'required|string|max:255', 
            'email' => ['required', 'email', 'regex:/^[^@]+@[^@]+$/'], 
            'password' => 'required|min:8|confirmed', 
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'الاسم مطلوب.', 
            'name.string' => 'الاسم يجب أن يكون نصيًا.',
            'name.max' => 'الاسم يجب أن لا يتجاوز 255 حرفًا.',
            'email.required' => 'البريد الإلكتروني مطلوب.', 
            'email.email' => 'يجب إدخال بريد إلكتروني صحيح.',
            'email.regex' => 'البريد الإلكتروني يجب أن يحتوي على علامة @.',
            'password.required' => 'كلمة المرور مطلوبة.', 
            'password.min' => 'كلمة المرور يجب أن تحتوي على 8 أحرف على الأقل.',
            'password.confirmed' => 'تأكيد كلمة المرور غير مطابق.', 
        ];
    }
}
