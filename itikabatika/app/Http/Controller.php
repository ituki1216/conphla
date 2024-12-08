<?php

namespace App\Http\Controllers;

use illuminate\\Http\\Request;
use illuminate\\Support\\Facades\\Mail;
use App\\Http\\Requests\\ContactFormRequest;
use App\\Mail\\ContactFormAdminMail;
use App\\Main\\ContactFromUserMain;

class FormController extends Controllers
{
    //入力ページ
    public function index()
    {
        return view('contact.index');
    }

    //確認ページ
    public function confirm()
    {
        return view('contact.confirm');
    }

    //完了ページ
    public function complete()
    {
        return view('contact.complete');
    }

    //メール送信
    public function sendMail(ContactFormRequest $request) // もしsendMainlに関する申請がきたら
    {
        $form_date = $request->validated(); //バリデーションされたformdataを返す

        //submitのbuttonの値により結果を分岐させる
        $submitBtnVal = $request->input('submitBtnVal'); //これをもとにformの推移籍を決める
        switch ($submitBtnVal){
            case 'confirm':
                //確認画面へ
                return to_route('contact.confirm')->withInput();
                break;
            case 'back':
                //入力画面へ戻る
                return to_route('contact')->withInput();
                break;
            case 'complete':
                //送信先メールアドレス
                $email_admin=env('yamanakasan@icloud.com');
                $email_user = $form_data('email')

                return to_route('contact.complete');
                break;
            default:
        }
    }
}

