<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'user_name' => 'required|string|max:255',
            'user_sex' => 'required|string|max:10',
            'user_image' => 'nullable|string',
            'user_phone' => 'required|string|max:20',
            'user_email' => 'required|string|email|max:255|unique:users,user_email',
            'user_password' => 'required|string|min:6',
            'role_id' => 'required|exists:roles,id',
            'status' => 'required|boolean',
        ];
    }

    public function messages()
    {
        return [
            'user_name.required' => 'Tên người dùng là bắt buộc.',
            'user_email.required' => 'Email là bắt buộc.',
            'user_email.unique' => 'Email đã tồn tại.',
            'user_password.required' => 'Mật khẩu là bắt buộc.',
            // Các thông báo khác tùy theo nhu cầu của bạn
        ];
    }
}
