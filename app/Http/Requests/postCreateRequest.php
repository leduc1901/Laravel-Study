<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class postCreateRequest extends FormRequest
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
            'email' => 'required|email',
            'password' => 'required|min:5',
            'full' => 'required',
            'address' => 'required',
            'phone' => 'required|numeric',
            'level' => 'required'
        ];
    }
    public function message()
    {
        return [
            'email.required'=>'email không được để trống!',
            'email.email'=>'email không đúng định dạng!',
            'password.required'=>'Mật khẩu không được để trống!',
            'password.min'=>'Mật khẩu không được nhỏ hơn 5 ký tự',
            'full.required' => 'Tên thành viên không được để trống',
            'address.required' => 'Địa chỉ không được để trống',
            'phone.required' => 'Số điện thoại không được để trống',
            'phone.numeric' => 'Phải nhập số vào đây',
            'level.required' => 'Phải tích 1 trong 2' 
        ];
    }
}
