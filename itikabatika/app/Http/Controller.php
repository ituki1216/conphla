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
        $form_date = $request->validated();

        //submitのbuttonの値により結果を分岐させる
        $submitBtnVal = $requets->input('submitBtnVal');
        switch ($submitBtnVal){
            case 'confirm':
        }
    }
}

