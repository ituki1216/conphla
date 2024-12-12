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

    public function __construct(public array $form_data) //基本的な送信情報を設定する
    {
        //
    }

    public function envelope(): envelope
    {
        $from = new Address(env('yamanakasan@icloud.com'), env('yamanakasan@icloud.com'));
    }
}