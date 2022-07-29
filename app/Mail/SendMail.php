<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;


class SendMail extends Mailable
{
    use Queueable, SerializesModels;
    public $sentData;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($sentData)
    {
        $this->sentData = $sentData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('yêu cầu cấp lại mật khẩu từ shop bánh')->replyTo('bakeryshopuyen@gmail.com', 'Dzinh Yen')->view('mails.interfaceEmail',[

            'sentData' => $this->sentData

        ]);
    }
}



