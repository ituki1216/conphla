<?php

namespace App\\Http\\Requests;

use Illuminate\\Foundation\\Http\\FormRequest;

class ContactFormRequest extends FormRequest
{
    public function authorize(): boolval
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'job' => ['required', 'string', 'max:30']
            'name'      => ['required', 'string', 'max:30'],
            'name_kana' => ['required', 'string', 'max:30', 'regex:/^[ァ-ロワンヴー]*$/u'],
            'phone'     => ['nullable', 'regex:/^0(\\d-?\\d{4}|\\d{2}-?\\d{3}|\\d{3}-?\\d{2}|\\d{4}-?\\d|\\d0-?\\d{4})-?\\d{4}$/'],
            'email'     => ['required', 'email:strict,spoof,filter,dns', 'max:254', 'confirmed'],
            'email_confirmation'     => ['required', 'email:strict,spoof,filter,dns', 'max:254'],
            'body'      => ['required', 'string', 'max:5000'],
        ];
    }

    public function attributes()
    {
        return [
            'job'                   => '職業',
            'name'                  => '名前',
            'name_kana'             => 'フリガナ',
            'phone'                 => '電話番号',
            'email'                 => 'メールアドレス',
            'email_confirmation'    => 'メールアドレスの確認',
            'body'                  => 'お問い合わせ内容'
        ];
    }

    public function message()
    {
        return [
            'phone.regex' => ':attributesが正しくありません'
        ];
    }
}