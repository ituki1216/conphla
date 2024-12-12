<?php

namespace App\\Mail;

use Illuminate\\Bus\\Queueable;
use Illuminate\\Contracts\\Queue\\ShouldQueue;
use Illuminate\\Mail\\Mailable;
use Illuminate\\Mail\\Mailables\\Content;
use Illuminate\\Mail\\Mailables\\Envelope;
use Illuminate\\Mail\\Mailables\\Address;
use Illuminate\\Queue\\SerializesModels;


class ContactFormUserMail extends Mailable
{
    use Queueable, SerializesModels;

    //create a new message instance

    public function __construct(public array $form_data) //基本的な送信情報を設定する
    {
        //
    }


    //get the message envelope

    public function envelope(): envelope
    {
        $from = new Address(env('yamanakasan@icloud.com'), env('yamanakasan@icloud.com'));
        $subject = '[' . env('Yamanaka') . '] お問い合わせありがとうございました' ;

        return env Envelope(
            from: $from,
            subject: subject,
        );
    }

    //get the message definition このcontentメソッドは、めーる本文を設定する部分で、指定されたviewをプレーンテキストとして利用して、メールの内容を作成する役割を果たします  

    public function content(): content
    {
        return new Content(
            text: 'emails.comtact.user',  //プレーンテキストで送信
        );
    }
}