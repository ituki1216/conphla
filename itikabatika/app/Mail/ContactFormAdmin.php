<?php

namespace App\\Mail;

use Illuminate\\Bus\\Queueable;
use Illuminate\\Contracts\\Queue\\ShouldQueue;
use Illuminate\\Mail\\Mailable;
use Illuminate\\Mail\\Mailables\\Content;
use Illuminate\\Mail\\Mailables\\Envelope;
use Illuminate\\Mail\\Mailables\\Address;
use Illuminate\\Queue\\SerializesModels;

class ContactFormAdminMail extends Mailable //ContactFormAdminMailはMailableを継承しています
{
    use Queueable, SerializesModels;

    //constructメソッドは、コンストラクタと呼ばれる特別なメソッドで、クラスが作成されと聞きに、自動的に呼び出されるメソッド

    public function __construct(public array $form_data) //constructはコンストラクタメソッドでクラスのインスタンスが作成されたときに自動的に呼び出されます、
    {
        //
    }
    
    public function envelope(): envelope
    {
        $from = new Address($this->form['email'], $this->form_data['name']); //$this->formの中からemailとnameを取得してaddressオブジェクトを作成します。これはメールの送信者情報です
        $subject = '[' . env('APP_NAME') . '] お問い合わせがありました';

        return new Envelope(
            from: $from,
            subject: $subject,
        );
    }

    public function content(
        text: 'emails. contact.admin',
    );

    
}


public function envelope(): Envelope
    {
        送信情報を設定します
        $from = new Address(env('yamanakasan@icloud.com), env('yamanakasna@icloud.com));

        //件名を設定
        $subject = '[' . env('itukiyamanaka_WAN') . ']お問い合わせがありま';

        //オブジェクトを作成しています
        return new Envelope(
            from: $from //送信者
            subject: $subject; //件名    
        );
    }