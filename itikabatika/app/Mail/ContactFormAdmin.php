<?php

namespace App\\Mail;

use Illuminate\\Bus\\Queueable;
use Illuminate\\Contracts\\Queue\\ShouldQueue;
use Illuminate\\Mail\\Mailable;
use Illuminate\\Mail\\Mailables\\Content;
use Illuminate\\Mail\\Mailables\\Envelope;
use Illuminate\\Mail\\Mailables\\Address;
use Illuminate\\Queue\\SerializesModels;

class ContactFormAdminMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public array $form_data) //constructはコンストラクタメソッドでクラスのインスタンスが作成されたときに自動的に呼び出されます、
    {
        //
    }

    public function envelope(): envelope
    {
        $from = new Address($this->form['email'], $this->form_data['name']);
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